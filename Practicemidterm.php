

<?php
//
// File: index.php
// Description: This is the Midterm
// Created: Tue. April 10, 2018
// Author: Joshua Santillan
// mail: Santj96@gmail.com
//

echo '<form action="" method="post">';
echo '<input type="text" name="question" placeholder="enter q1-q13">';
echo '<input type="submit" name="submit" value="Locate Question" placeholder="hi">';
echo '</form>';

if (isset($_POST['question'])) {
   
    $questions = [
 'q1' => [
           'text' => 'What does PHP stand for?', 
            'choices' => [
                'a'=>'PHP: Hypertext Preprocessor',
                'b'=>'Private Home Page',
                'c' => 'Personal Hypertext Processor'
            ],
            'correct' => 'a'
        ],
    
 'q2' => [
           'text' => ' PHP server scripts are surrounded by delimiters, which?', 
            'choices' => [
                'a'=>'< ? php >...< /? >', 
                'b'=>'< script >...< /script >',
                'c' => '< ?php...? >',
                'd' => '< & >...< /& >'
            ],
            'correct' => 'c'
        ],
    
 'q3' => [
           'text' => 'How do you write "Hello World" in PHP?', 
            'choices' => [
                'a'=>'echo "Hello World";',
                'b'=>'"Hello World";',
                'c' => 'Document.Write("Hello World");'
            ],
            'correct' => 'a'
        ],
 'q4' => [
           'text' => 'All variables in PHP start with which symbol?', 
            'choices' => [
                'a'=>'!',
                'b'=>'$',
                'c' => '@'
            ],
            'correct' => 'b'
        ],
 'q5' => [
           'text' => 'What is the correct way to end a PHP statement?',
            'choices' => [
                'a'=>'New line',
                'b'=>'.',
                'c' => ';',
                'd' => '< / php >'
            ],
            'correct' => 'c'
        ],
 'q6' => [
           'text' => 'The PHP syntax is most similar to:',
            'choices' => [
                'a'=>'JavaScript',
                'b'=>'VBScript',
                'c' => 'Perl and C'
            ],
            'correct' => 'c'
        ],
 'q7' => [
           'text' => 'How do you get information from a form that is submitted using the "get" method?',
            'choices' => [
                'a'=>'$_GET[]',
                'b'=>'Request.Form',
                'c' => 'Request.QueryString'
            ],
            'correct' => 'a'
        ],
 'q8' => [
           'text' => 'When using the POST method, variables are displayed in the URL:',
           
            'choices' => [
                'a'=>'True',
                'b'=>'False'
            ],
            'correct' => 'b'
        ],
 'q9' => [
           'text' => 'In PHP you can use both single quotes  ( \' \' ) and double quotes ( " " ) for strings:',
            'choices' => [
                'a'=>'True',
                'b'=>'False'
            ],
            'correct' => 'a'
        ],
 'q10' => [
           'text' => 'What is the correct way to create a function in PHP?',
            'choices' => [
                'a'=>'new_function myFunction()',
                'b'=>'function myFunction()',
                'c'=>'create myFunction()'
            ],
            'correct' => 'b'
        ],
 'q11' => [
           'text' => 'What is the correct operator for the modulus sign?',
            'choices' => [
                'a'=>'+',
                'b'=>'*',
                'c'=>'%'
            ],
            'correct' => 'c'
        ],
 'q12' => [
           'text' => 'You are required to use closing PHP tags in a php file that is written strictly in PHP. ',
            'choices' => [
                'a'=>'True',
                'b'=>'False'
                
            ],
            'correct' => 'b'
        ],
'q13' => [
           'text' => 'How do you feel about midterms given out during spring break?',
            'choices' => [
                'a'=>'We do not like then',
                'b'=>'I was unprepared',
                'c'=>'scary'
            ],
            'correct' => 'c'
        ],
];
    $value = $_POST['question'];
if (isset($questions[$value])) {
    echo '<dt><i>'.$questions[$value]['text'] .'</i></dt>';
    echo ' <dd><ol type="a">' ;
   if (!empty($questions[$value]["choices"]["a"])) { echo '<li>' .$questions[$value]["choices"]["a"]. '</li>'; }
   if (!empty($questions[$value]["choices"]["b"])) { echo '<li>' .$questions[$value]["choices"]["b"]. '</li>'; }
   if (!empty($questions[$value]["choices"]["c"])) { echo '<li>' .$questions[$value]["choices"]["c"]. '</li>'; }
   if (!empty($questions[$value]["choices"]["d"])) { echo '<li>' .$questions[$value]["choices"]["d"]. '</li>'; }
    echo '</ol></td><br>';
    echo 'Answer:' .$questions[$value]["correct"]. '';
     // This checks for the question aka the $value in the array $question
    // This is where the question information goes
} else {
    echo 'Invalid Input: Enter a problem q1-q10';
    // Question doesn't exist echo some error msg
}


}


// This was also done with a foreach loop but the instrunctions made it seem like you did not want it done this way

//echo '<dl>';
/* foreach($questions as $question=>$problem) {
    if(isset($_POST['question']) && $_POST['question'] === $question) {
        echo '<dt>'.$question. '</dt>';
    echo '<dt><i>'.$problem['text'] .'</i></dt>';
    echo ' <dd><ol type="a">' ;
    if (!empty($problem["choices"]["a"])) { echo '<li>' .$problem["choices"]["a"]. '</li>'; }
    if (!empty($problem["choices"]["b"])) { echo '<li>' .$problem["choices"]["b"]. '</li>'; }
    if (!empty($problem["choices"]["c"])) { echo '<li>' .$problem["choices"]["c"]. '</li>'; }
    if (!empty($problem["choices"]["d"])) { echo '<li>' .$problem["choices"]["d"]. '</li>'; }
    echo '</ol></td><br>';
    echo 'Answer:' .$problem["correct"]. '';
    }
    else {
        
    }



    echo '</tr>';
}
*/

?>






