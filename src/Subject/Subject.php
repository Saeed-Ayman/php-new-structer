<?php

namespace App\Subject;

use App\Exam\Exam;

class Subject
{
    protected array $exams = [];

    public function getExams(): array
    {
        return $this->exams;
    }

    public function addExam(Exam $exam): void
    {
        $this->exams[] = $exam;
    }
}