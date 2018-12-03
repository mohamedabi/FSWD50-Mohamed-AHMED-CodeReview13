<?php
namespace AppBundle\Controller;
// We include the entity that we create in our Controller file
use AppBundle\Entity\todo;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

// Now we need some classes in our Controller because we need that in our form (for the inputs that we will create)
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class TodoController extends Controller
{
   /**
    * @Route("/", name="todo_list")
    */
   public function listAction(){

// Here we will use getDoctrine to use doctrine and we will select the entity that we want to work with and we used findAll() to bring all the information from it and we will save it inside a variable named todos and the type of the result will be an array 
       $todos = $this->getDoctrine()->getRepository('AppBundle:todo')->findAll();
       // replace this example code with whatever you need
       return $this->render('todo/index.html.twig', array('todos'=>$todos));
   }

     /**
    * @Route("/todo/details/{id}", name="todo_details")
    */
   public function detailsAction($id){
               $todo = $this->getDoctrine()->getRepository('AppBundle:todo')->find($id);
       return $this->render('todo/details.html.twig', array('todo' => $todo));
   }


    /**
    * @Route("/todo/create", name="todo_create")
    */
   public function createAction(Request $request){

// Here we create an object from the class that we made 
       $todo = new todo;

/* Here we will build a form using createFormBuilder and inside this function we will put our object and then we write add then we select the input type then an array to add an attribute that we want in our input field */
       $form = $this->createFormBuilder($todo)
       ->add('img', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('description', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('capacity', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('email', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

       ->add('number', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

   ->add('address', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

   ->add('URL', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

   ->add('Type', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

          ->add('date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))

   ->add('save', SubmitType::class, array('label'=> 'Create event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))
       ->getForm();
       $form->handleRequest($request);


/* Here we have an if statement, if we click submit and if  the form is valid we will take the values from the form and we will save them in the new variables */
       if($form->isSubmitted() && $form->isValid()){
           //fetching data
           $img = $form['img']->getData();
           $name = $form['name']->getData();
           $date = $form['date']->getData();
           $description = $form['description']->getData();
           $capacity = $form['capacity']->getData();
           $email = $form['email']->getData();
           $number = $form['number']->getData();
           $address = $form['address']->getData();
           $URL = $form['URL']->getData();
           $Type = $form['Type']->getData();



// Here we will get the current date
           $now = new\DateTime('now');


/* these functions we bring from our entities, every column have a set function and we put the value that we get from the form */
           $todo->setImg($img);
           $todo->setName($name);
           $todo->setDate($date);
           $todo->setDescription($description);
           $todo->setCapacity($capacity);
           $todo->setEmail($email);
           $todo->setNumber($number);
           $todo->setAddress($address);
           $todo->setURL($URL);
           $todo->setType($Type);

           $em = $this->getDoctrine()->getManager();
           $em->persist($todo);
           $em->flush();
           $this->addFlash(
                   'notice',
                   'todo Added'
                   );
           return $this->redirectToRoute('todo_list');
       }
/* now to make the form we will add this line form->createView() and now you can see the form in create.html.twig file  */
       return $this->render('todo/create.html.twig', array('form' => $form->createView()));
   }


   /**
    * @Route("/todo/edit/{id}", name="todo_edit")
    */
   public function editAction( $id, Request $request){

/* Here we have a variable todo and it will save the result of this search and it will be one result because we search based on a specific id */
   $todo = $this->getDoctrine()->getRepository('AppBundle:todo')->find($id);

$now = new\DateTime('now');


/* Now we will use set functions and inside this set functions we will bring the value that is already exist using get function for example we have setName() and inside it we will bring the current value and use it again */
           $todo->setImg($todo->getImg());
           $todo->setName($todo->getName());
           $todo->setDate($todo->getDate());
           $todo->setDescription($todo->getDescription());
           $todo->setCapacity($todo->getCapacity());
           $todo->setEmail($todo->getEmail());
           $todo->setNumber($todo->getNumber());
           $todo->setAddress($todo->getAddress());
           $todo->setURL($todo->getURL());
           $todo->setType($todo->getType());

/* Now when you type createFormBuilder and you will put the variable todo the form will be filled of the data that you already set it */
      $form = $this->createFormBuilder($todo)

      ->add('img', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('capacity', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('email', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

       ->add('number', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

   ->add('address', TextType::class, array('attr' => array('class'=>'form-control', 'style'=>'margin-bottom:15px')))

   ->add('URL', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

   ->add('Type', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

     ->add('date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))

   ->add('save', SubmitType::class, array('label'=> 'Update event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-botton:15px')))
       ->getForm();

       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()){
           //fetching data
           $img = $form['img']->getData();
           $name = $form['name']->getData();
           $date = $form['date']->getData();
           $time = $form['time']->getData();
           $description = $form['description']->getData();
           $capacity = $form['capacity']->getData();
           $email = $form['email']->getData();
           $number = $form['number']->getData();
           $address = $form['address']->getData();
           $URL = $form['URL']->getData();
           $Type = $form['Type']->getData();

           $em = $this->getDoctrine()->getManager();
           $todo = $em->getRepository('AppBundle:todo')->find($id);
           $todo->setImg($img);
           $todo->setName($name);
           $todo->setDate($date);
           $todo->setTime($time);
           $todo->setDescription($description);
           $todo->setCapacity($capacity);
           $todo->setEmail($email);
           $todo->setNumber($number);
           $todo->setAddress($address);
           $todo->setURL($URL);
           $todo->setType($Type);

        
           $em->flush();
           $this->addFlash(
                   'notice',
                   'todo Updated'
                   );
           return $this->redirectToRoute('todo_list');
       }
       return $this->render('todo/edit.html.twig', array('todo' => $todo, 'form' => $form->createView()));
   }

  /**
    * @Route("/todo/delete/{id}", name="todo_delete")
    */
   public function deleteAction($id){
                $em = $this->getDoctrine()->getManager();
           $todo = $em->getRepository('AppBundle:todo')->find($id);
           $em->remove($todo);
            $em->flush();
           $this->addFlash(
                   'notice',
                   'Todo Removed'
                   );
            return $this->redirectToRoute('todo_list');
   }
}