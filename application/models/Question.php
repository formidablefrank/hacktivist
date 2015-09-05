<?php
/**
* Model for getting questions, possible choices.
* Evaluates previous answers from user to get next question.
*/
class Question extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function getQuestion($qid){
        $this->db->limit(1);
        return $this->db->get_where('questions', array('question_id' => $qid));
    }

    function getChoices($qid){
        return $this->db->query("SELECT DISTINCT question_id, choice_id, choice_text FROM questions_choices NATURAL JOIN choices WHERE question_id = '$qid';");
    }

    function putAnswer($qid, $ans, $userid){
        return $this->db->insert('answers', array('question_id' => $qid, 'choice_id' => $ans, 'user_id' => $userid));
    }

    function evalQuestion($qnum, $ans){
        $lookup = [ [1, 0,0,0,0],
                    [0, 3, "healthy", 0, 0],
                    [0, 0, 0, 12, 7],
                    [0, 6, 6, 0, 0],
                    [0, 5, "healthy",0,0],
                    [0, "healthy", "HIV", 0, 0],
                    [0, 2, 15, 0, 0],
                    [0, "chlamydia", 8, 0, 0],
                    [0, 9, 10, 0, 0],
                    [0, "gonorrhea", 11, 0, 0],
                    [0, "chlamydia","consult",0,0],
                    [0, "tricho", 10, 0, 0],
                    [0, 13, 14, 0, 0],
                    [0, "gonorrhea", 10, 0, 0],
                    [0, 13, 14, 0, 0],
                    [0, 16, 5, 0, 0],
                    [0, 17, 19, 0, 0],
                    [0, "scabies", 18, 0, 0],
                    [0, "scabies", "pubic lice", 0,0],
                    [0, "yeast", 20, 0, 0],
                    [0, 21, "consult", 0, 0],
                    [0, "herpes", 22, 0, 0],
                    [0, "syphilis", "warts", 0, 0]
                  ];
        return $lookup[$qnum][$ans];
    }
}
?>