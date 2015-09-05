<?php
/**
* Model for adding FAQs and filtering FAQs based on a query string
*/
class Faq extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function addFaq($question, $answer){
        return $this->db->insert('faqs', array('faq_question' => $question, 'faq_answer', $answer));
    }

    function searchFaq($query){
        return $this->db->query("SELECT * FROM faqs WHERE faq_question LIKE '%$query%' OR faq_question LIKE '%query%'");
    }
}
?>