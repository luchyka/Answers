<?php

namespace AnswersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * Create new Question and Answer
     */
    public function newAnswer($title, $answer)
    {
        $qa = new QA();
        $qa->setTitle($question);
        $qa->setContent($answer);
        $qa->setUri();

        $em = $this->getDoctrine()->getManager();
        $em->persist($qa);
        $em->flush();

        return $this->render('AnswersBundle:Default:index.html.twig', array('question' => $question, 'answer' => $answer));
    }

    /**
     * List all Questions and Answers
     */
    public function listQAAction() {
        $em = $this->getDoctrine()->getManager();
        $qaList = $em->getRepository('AnswersBundle:QA')
            ->findAllOrderedById();

        return $this->render('AnswersBundle:Default:index.html.twig', array('qaList' => $qaList));
    }

    /**
     * List one Question and Answer depending on ID
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listOneQAAction($id) {
        $oneQA = $this->getDoctrine()
            ->getRepository('AnswersBundle:QA')
            ->find($id);
        if(!$oneQA) {
            throw $this->createNotFoundException(
                'No Question and Answer found for id: ' . $id
            );
        }

        return $this->render('AnswersBundle:Default:index.html.twig', array('oneQA' => $oneQA));
    }

    /**
     * Create new Comment
     */
    public function newCommentAction($content, $createdAt, $creadetBy, $qaID)
    {
        $comment = new Comment();
        $comment->setContent($content);
        $comment->setCreatedAt($createdAt);
        $comment->setCreadetBy($creadetBy);
        $comment->setQaID($qaID);

        $em = $this->getDoctrine()->getManager();
        $em->persist($comment);
        $em->flush();

        return $this->render('AnswersBundle:Default:index.html.twig', array('content' => $content, 'createdAt' => $createdAt, 'creadetBy' => $creadetBy, 'qaID' => $qaID));
    }
}
