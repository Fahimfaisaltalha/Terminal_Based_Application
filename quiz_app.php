<?php

function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;


    foreach($questions as $index=>$question){
        if(strtolower($answers[$index])===strtolower($question['correct'])){
            $score++;
        }
        
    }
    return $score;

                                //--- Also can be done with for loop --//

    /* for ($i = 0; $i < count($questions); $i++) {
    //     if (strtolower($answers[$i]) === strtolower($questions[$i]['correct'])) {
    //         $score++;
    //     }
    // }

     return $score; */
  
}

$questions = [
    ['question' => 'What is 73 + 89 ?', 'correct' => '162'],
    ['question' => 'What is the capital of Bangladesh ?', 'correct' => 'Dhaka'],
    ['question' => 'How many districts in Bangladesh ?', 'correct' => '64'],
    ['question' => 'How many division in Bangladesh ?', 'correct' => '8'],
];

$answers = [];
echo "Welcome to the Terminal base Quiz Application \n";
echo "Please Enter the following Question : \n";

foreach ($questions as $index => $question) {
    echo ($index + 1) . "." . $question['question'] . "\n";
    echo "Your Answer :";
    $answers[] = trim(readline());
}
$totalQuestions = count($questions);
$score = evaluateQuiz($questions, $answers);

echo "You scored $score out of $totalQuestions.\n";
if ($score === $totalQuestions) {
    echo "Excellent job!\n";
} elseif ($score > $totalQuestions / 2) {
    echo "Good effort!\n";
} else {
    echo "Better luck next time!";
}
