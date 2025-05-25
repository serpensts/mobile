<?php
$correct_answers = [
    'q1' => 'goes',
    'q2' => 'watched',
    'q3' => 'done',
    'q4' => 'would',
    'q5' => 'since',
    'q6' => 'in',
    'q7' => 'went',
    'q8' => 'were',
    'q9' => 'are',
    'q10' => 'most interesting'
];

$score = 0;
$log = "Результаты теста:\n";

foreach ($correct_answers as $question => $correct) {
    $user_answer = $_POST[$question] ?? 'не выбрано';
    if ($user_answer === $correct) {
        $score++;
    }
    $log .= "$question: $user_answer\n";
}

$log .= "Итог: $score из 10\n";
$log .= "--------------------------\n";

file_put_contents("comments.txt", $log, FILE_APPEND);

echo "<h2>Вы правильно ответили на $score из 10 вопросов.</h2>";
echo "<p>Спасибо за прохождение теста!</p>";
echo "<a href='index4.html'>Вернуться назад</a>";
?>