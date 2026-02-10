<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FilterByAuther</title>
    </head>
    <body>
        
        <?php 


        $books = 
                    [
                        
                        [
                            'name' => 'Mouadah',

                            'Auther'=> 'MAlek',
                            
                            'releaseYear' => '10',

                            'purchaseUrl'=> 'http//example.com',
                        ],

                        [
                            'name' => 'Mousnad',

                            'Auther'=> 'Ahamd',
                            
                            'releaseYear' => '12',

                            'purchaseUrl'=> 'http//example.com',
                        ],

                        [
                            'name' => 'Sahih',

                            'Auther'=> 'Boukari',
                            
                            'releaseYear' => '30',

                            'purchaseUrl'=> 'http//example.com',
                        ],

                    ];

        // $Filter = function ($items , $fn) {
           
        //    $filter_list =[];

        //         foreach ($items as $item){

        //             if ($fn($item)) {

        //                 $filter_list[] = $item;

        //             }


                    
        //             }
              
        //     return $filter_list;
           

        // };


        // $filter_book =$Filter($books,function($book){

        // return $book['name'] == 'Sahih';
        // });

        $filteredBooks = array_filter($books, function ($book) {
            return $book['name'] == 'Sahih';
        });
        ?>


        <ul>
           <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) ==> By <?= $book['Auther'] ?>
                </a>
            </li>
        <?php endforeach; ?>
        </ul>
            
    </body>
</html>