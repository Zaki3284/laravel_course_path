<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

            <ul>
                    <?php 

                       $numbers = ["Alahamdou lillah ","Allah Akbar","Soubhana Allah","Laillaha ila Allah"];
                         
                        foreach ($numbers as $number){
                            echo "<li>$number</li>";
                        }

                    ?>
            </ul>
        
        
</body>
</html>