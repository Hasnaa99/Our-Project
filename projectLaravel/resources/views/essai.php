Route::get('/', function () {
    return view('welcome');
});
//exemple1
Route::get('/exemple1', function() {
    return '<h3>premier exemple en laravel</h3>';
});
//exemple2 affiche nom optinnelle  soit entrer le nom ou no
Route::get('/page1/{nom?}', function($nom='') {
   echo 'Bonjour '.$nom;
});
Route::get('/page19/{nom}', function($nom='') {
    echo 'Bonjour '.$nom;
 });
//exemple3 le champ de nom devient optinnelle si j'entre le nom va afficher le nom si non afficher salma
Route::get('/page2/{nom?}', function($nom='salma') {
    echo 'Bonjour '.$nom;
 });
 //exemple4 :parametre obligatoire de saisire
 Route::get('/page3/{nom}/{prenom}', function($nom,$prenom) {
    echo 'Bonjour '.$nom .$prenom ;
 });
 //exemple5  tableau obligatoire de saisire
 Route::get('/page4/{nom}/{prenom}', function($nom,$prenom) {
    return["nom"=>$nom, "prenom"=>  $prenom];
 });
 //exemple7: TAPER URL http://127.0.0.1:8000/page5?nom=oumni&prenom=zahir
 Route::get('/page5', function() {
    return["nom"=>$_GET['nom'], "prenom"=>  $_GET['prenom']];
 });
  //exemple8: TAPER URL hhttp://127.0.0.1:8000/page6?nom=oumni utilisation path
  Route::get('/page6', function(Request $request) {
    return["nom"=>$request->path(), "laravel"=> "laravel1"];
 });
  //exemple9: TAPER URL hhttp://127.0.0.1:8000/page6?nom=oumni utilisation url
  Route::get('/page7', function(Request $request) {
    dd($request);
    return["nom"=>$request->url(), "laravel"=> "laravel1"];
 });
 http://127.0.0.1:8000/page8?nom=zahir&perenom=rrr
 Route::get('/page8', function(Request $request) {
    // dd($request);
    return["nom"=>$request->url(),"prenom"=>$request->url(), "laravel"=> "laravel1"];
 });
 //exemple10:27.0.0.1:8000/page9?nom=zahir&prenom=kaoutar&age=19&vill=safi
 Route::get('/page9', function(Request $request) {
    // dd($request);
    return["nom"=>$request->all()];
 });
//exemple10:27.0.0.1:8000/page10?nom=zahir&prenom=kaoutar&age=19&vill=safi
Route::get('/page10', function(Request $request) {
    // dd($request);
    $tab=$request->all();
    foreach($tab as $row) {
        echo "<p>".$row."</p>";}
 });
 //exemle12:http://127.0.0.1:8000/page11?nom=zahir&prenom=kaoutar&age=19&vill=safi
 Route::get('/page11', function(Request $request) {
    // dd($request);
    $tab=$request->all();
    $str="";
    foreach($tab as $row) {
        $str.="<p>".$row."</p>";
    }
    return $str;
 });
//exemple13:http://127.0.0.1:8000/page12?nom=zahir
Route::get('/page12', function(Request $request) {
    // dd($request);
    return["nom"=>$request->input('nom'),"laravel"=>"LARAVEL10"];
 });
 //exemple14:http://127.0.0.1:8000/page13?nom donne valeur null ==/http://127.0.0.1:8000/page13 afficher zahir
 Route::get('/page13', function(Request $request) {
    // dd($request);
    return["nom"=>$request->input('nom','zahir'),"laravel"=>"LARAVEL10"];
 });
 //exemple15:http://127.0.0.1:8000/page14/post1-id1
 Route::get('/page14/{post}-{id}', function(string $post, string $id) {
    // dd($request);
    return["post"=>$post,"id"=>$id];
 });
//exemple16:contraint sur un parametre de url route == typre
Route::get('/page15/{post}-{id}', function(string $post, string $id,Request $request) {
    // dd($request);
    return["post"=>$post,"id"=>$id,"nom"=>$request->input('nom','zahir')];
 })->where(['id'=>'[0-9]+','post'=>'[a-z-0-9]+']);
 //exemlp:






 //exemlpe17:nommer route    tapez la commande php artisan route :list pour visualiser name route
 Route::get('/page16', function(Request $request) {
    // dd($request);
    return['link'=>'/blog/article'];
 })->name('blog.index');
 //exemple18:commande php artisan route:list

Route::get('/page18/{post}-{id}', function(string $post, string $id) {
    // dd($request);
    return["post"=>$post,"id"=>$id];
 })->where(['id'=>'[0-9]+','post'=>'[a-z-0-9]+'])->name('blog.show');


//exemple
Route::get('/example10',function(){
    return ['link'=>'/blog/article/4'];
})->name("index.blog");

Route::get('/blog', function(){
    return ['link' => \route('blog.show', ['post' => 'article', 'id' => 3])];
})->name('blog.index');