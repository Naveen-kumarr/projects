<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to the educational blog</title>

    <!-- Bootstrap core CSS -->
    <link href="naveen/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Welcome to the educational blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">Study world</h1>

         

        

          <!-- Preview Image -->
          <img src="educational.jpg" alt="educational_blog" />

          <hr>

          <!-- Post Content -->
          <p class="lead">Welcome to my educational blogging site! My name is Naveen. I always love to learn new things and I have a passion for learning about world histories, politics, and cultures. I plan on sharing that passion with high school students as a teacher. Please feel free to explore the pages on this site to learn about the history and political science fields, about the projects that I will complete for my masters program and educational technologies course.</p>

          <blockquote class="blockquote">
            <p class="mb-0">Classroom Technologies – Tablets in the Classroom </p>
            <footer class="blockquote-footer">
              <cite title="Source Title"></cite>
            </footer>
          </blockquote>

          <p>As we sail through the 21st century, technology in the classroom is becoming more and more predominant. Tablets are replacing our textbooks, and we can research just about anything that we want to on our smartphones. Social media has become commonplace, and the way we use technology has completely transformed the way we live or lives. </p>

          <hr>

         

          <!-- Single Comment -->
          <div class="media mb-4">
            <div class="media-body">
              <h5 class="mt-0">Technology Helps Students Learn at Their Own Pace</h5>
             Today’s technology enables students to learn at their own pace. For example, almost all apps allow for individualized instruction. Students can learn according to their abilities and needs. This form of teaching is also great for the teacher because it gives him/her the time to work individually with students who may be struggling.
            </div>
          </div>

          <!-- Comment with nested comments -->
          <div class="media mb-4">
           
            <div class="media-body">
              <h5 class="mt-0">Improved Retention Rate</h5>
             Student perceptions in the study believe that technology helps them retain information better. According to different a study, these students may be on to something. Eighteen 2nd grade students were challenged to complete a Power Point project about an animal. Sixteen out of the 18 students remembered more facts about the animal after completing the presentation. These results show that technology indeed helps students remember what they learn.
              <div class="media mt-4">
               
                <div class="media-body">
                  <h5 class="mt-0">Technology in the Classroom Makes Learning More Fun</h5>
                 According to the study mentioned above, students prefer technology because they believe that it makes learning more interesting and fun. They especially like laptops and tablets. Subjects that students deem challenging or boring can become more interesting with virtual lessons, through a video, or when using a tablet.
                </div>
              </div>

              <div class="media mt-4">
                
                <div class="media-body">
                  <h5 class="mt-0">Make immersive and interactive notes</h5>
                 In iOS 9, Apple revamped the native Notes application to make it much more powerful than before. Along with extra formatting controls, individual notes can now incorporate web links, checklists, photos taken within the app, sketches and miniature maps, making the app perfect for a whole range of tasks. Children could use Notes to record what happens on a field trip, to research a particular event in history, or for any other purpose where different media needs to be mixed with text.
                </div>
              </div>

            </div>
          </div>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

         
          

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">IIT JEE</a>
                    </li>
                    <li>
                      <a href="#">AIPMT</a>
                    </li>
                    <li>
                      <a href="#">BANKING</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">SSC</a>
                    </li>
                    <li>
                      <a href="#">RAILWAY</a>
                    </li>
                    <li>
                      <a href="#">AFCAT</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Have a look</h5>
            <div class="card-body">
              Technology occupies an important place within students’ lives. When they are not in school, just about everything that they do is connected in some way to technology. By integrating technology into the classroom, teachers are changing the way they used to teach (lectures six hours a day) and providing students with the tools that will take them into the 21st century.
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->
	  
	  
	  <?php
	include_once('link.php');
if(isset($_POST['submit']))
{
 $cm=$_POST['comment'];
 $na=$_POST['name'];
 if(empty($cm))
	{
		$msg="Please write your comment";
	}
	else if(empty($na))
	{
		$msg="Please Enter Your name";
	}	
	
else
{	
mysql_query("insert into users(comment,name) VALUES('$cm','$na')");

}
}
?>
	  
	  
	  
	   <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
             <form action="" method="post">
                <div class="form-group">
                  <textarea class="form-control" name="comment" rows="3"></textarea>
                </div>
               
				
				<h5 class="card-header">Your name</h5>
				 <textarea class="form-control" name="name" rows="1"></textarea></br>
				 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
				<a href="indexshow.php">Update</a>
              </form>
			  <h2><center>
<p style="color:red;"><?php
if(isset($msg))
{
	echo $msg;
}
?></p></center></h2>
            </div>
          </div>

    </div>
	
	
	
	
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Study world 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="naveen/jquery/jquery.min.js"></script>
    <script src="naveen/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
