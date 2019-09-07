<?php
if (!isset($_SESSION)) {// A mettre dans le menu pour l'echo en html et isset dans l'index.
    session_start();
   
}
// Autoloader
spl_autoload_register(function (string $className) {
    if (strpos($className, 'Blog\\') === 0) {
        $className = str_replace('Blog\\', '', $className);
        $className = str_replace('\\', '/', $className);

        require __DIR__ . "/{$className}.php";
    }
});


use Blog\Models\Connection;
use Blog\Models\BilletRepository;
use Blog\Controllers\frontEnd;
use Blog\Controllers\backEnd;
use Blog\Models\CommentRepository;
use Blog\Models\AdminRepository;

$connection = new Connection('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');

$controller = $_REQUEST['controller'] ?? 'billet';
$action = $_REQUEST['action'] ?? 'indexBillets';

if ($controller == "billet") {
    $billetRepository = new BilletRepository($connection);
    $commentRepository = new CommentRepository($connection);
    $frontEnd = new frontEnd($billetRepository, $commentRepository);
    /*if($action=="indexBillets"){
        render($controlBillet->indexBillets());
    }
    elseif($action=="accueilLogin"){
        render($controlBillet->accueilLogin());
    }*/
    switch ($action) {
        case 'indexBillets':
            render($frontEnd->indexBillets());
            break;

        case 'accueilLogin':
            render($frontEnd->accueilLogin());
            break;

        case 'afficheBilletSimple':
            render($frontEnd->afficheBilletSimple());
            break;

        case 'ajouteCommentaire':
            render($frontEnd->ajouteCommentaire());
            break;

        default:
            render($frontEnd->error404()); // message d'erreur à faire.
            break;
    }
} elseif ($controller == "backEnd") {
    if (empty($_SESSION['pseudoAdmin'])) {
        header('Location: index.php?controller=billet&action=accueilLogin');
    }
    $billetRepository = new BilletRepository($connection);
    $adminRepository = new AdminRepository($connection);
    $backEnd = new backEnd($adminRepository,$billetRepository);
    switch ($action) {
        case 'checkLogin':
            render($backEnd->checkLogin());
            break;
        
        case 'logout':
            render($backEnd->logout());
            break;
        case 'ajouteBillet':
            render($backEnd->ajouteBillet());
            break;
        case 'effaceBillet':
            render($backEnd->effaceBillet());
            break;

        case 'changeBillet':
            render($backEnd->changeBillet());
            break;

        case 'billetModifier':
            render($backEnd->billetModifier());
            break;

        case 'createBillet':
                render($backEnd->createBillet());
                break;

        default:
            render($backEnd->error404()); // message d'erreur à faire.
            break;
    }
}else{
    require("Views/404.php");
}

// Pour éviter tous soucis avec extract sur de potentiel variable ecrasé
function render(array $data = [])
{
    $views = $data['views'] ?? '';
    if (file_exists($views)) {
        unset($data['views']);
        extract($data);

        require $views;
    }
}

/*
$controllers = [
    'billet' => [
        'instance' => function () use ($connection) {
            $billetRepository = new BilletRepository($connection);
            $commentRepository = new CommentRepository($connection);
            $adminRepository = new AdminRepository($connection);
            $controlBillet= new ControlBillet($billetRepository, $commentRepository,$adminRepository);
            $backEnd= new BackEnd($adminRepository);
            
            return $controlBillet;
        },
        'actions' => [
            'indexBillets',
            'afficheBilletSimple',
            'ajouteCommentaire',
            'checkLogin',
            'accueilLogin',
            'logout',
            'keeplogin',
        ]
    ],

];

$currentController = $controllers[$controller] ?? $controllers['billet'];
$currentInstance = $currentController['instance']();




if (in_array($action, $currentController['actions']) && method_exists($currentInstance, $action)) {
    $data = $currentInstance->$action();
    render($data);
} else {
    echo "erreur";
}
*/
