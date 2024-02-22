<?php

//Class Name Picker

//$name = ['Victoria', 'Leon', 'Connor', 'Jenny', 'Elias', 'Gabor', 'Emma', 'Ashton', 'Alex', 'Rosina'];
//$score = array_rand($name);
//echo '<h1>The Winner Is...</h1>';
//
//echo $name[$score];
echo '<head><link rel="stylesheet" type="text/css" href="style.css"></head>';

//$movies = ['The Beach', 'Star Wars: A New Hope', 'Moulin Rouge', 'The Darjeeling Limited'];
//$moviesInfo = [
//                ['name'=>'The Beach',
//                'year'=>'2000',
//                'director'=>'Danny Boyle',
//                'actors'=>['Leonardo DiCaprio', 'Tilda Swinton', 'Virginie Ledoyen']],
//                ['name'=>'Star Wars: A New Hope',
//                    'year'=>'1977',
//                    'director'=>'George Lucas',
//                    'actors'=>['Mark Hamil', 'Carrie Fisher', 'Harrison Ford']],
//                ['name'=>'Moulin Rouge',
//                    'year'=>'2001',
//                    'director'=>'Baz Luhrman',
//                    'actors'=>['Nicole Kidman', 'Ewan MacGregor', 'Kylie Minogue']],
//                ['name'=>'The Darjeeling Limited',
//                    'year'=>'2007',
//                    'director'=>'Wes Anderson',
//                    'actors'=>['Owen Wilson', 'Adrien Brody', 'Jason Schwartzman']]];
//
//function headTails (): string {
//    $score = rand(1, 10);
//    if ($score >5) {
//        return 'Heads!';
//    } else {
//        return 'Tails!';
//    }
//}
//
echo '<h1>Details</h1> <ul>';

class User
{
    public string $name;
    public string $password;
    private string $email;
    public int $age; // can be different data types depending on what you need

    public function __construct (string $name, string $password, string $email, int $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->age = $age;
    }
}

$user1 = new User( 'Dave', 'timmy@coolguy.com', 'sausages', '66');

//$i=0;
//while ($i <10) {
//    echo headTails() . '<br>';
//    $i ++;
//}

//
//foreach ($movies as $film) {
//    echo '<li><a href="#' . $film . '">' . $film . '</a></li>';
//}
//echo '</ul>';
//
//foreach ($moviesInfo as $film) {
//    echo '<div class="movieCard">';
//    foreach ($film as $key=>$value) {
//        if ($key === 'name') {
//            echo '<h2 id="' . $value . '">' . $value . '</h2>';
//        } elseif ($key === 'actors') {
//            echo '<h3>Starring</h3><ul>';
//            foreach ($value as $actor){
//                echo '<li>' . $actor . '</li>';
//            }
//            echo '</ul>';
//        } else {
//        echo $key . ': ' . $value . '<br>';
//        }
//    }
//    echo '</div>';
//};
//