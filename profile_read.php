<?php
  include 'profile_action.php';
  $user_id = $_SESSION['user_id'];

  $get_profile = $profileObj->get_profile($user_id);

//   echo $_SESSION['user_id'];
//   die();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Your Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
  <body>
  <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        <img src="user_img/<?php echo $get_profile['user_img'] ?>" alt="User Photo">
                            <div class="file btn btn-lg btn-primary">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5 class="font-weight-bold">
                                    <?php echo "<span class='text-capitalize'>". $get_profile['first_name']."</span>" ?> 
                                    <?php echo "<span class='text-uppercase'>".$get_profile['last_name']."</span>" ?>
                                    </h5>
                                    <h6>
                                        Address: <?php echo $get_profile['home_address'] ?>
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Project</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="logout.php" class="profile-edit-btn btn btn-outline-warning text-dark">Logout</a>
                        <!-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p class="text-uppercase">user profile</p>
                                <a href="profile_update.php" class="mt-3">Update Profile</a><br>
                                <a href="change_password.php" class="mt-3">Change Password</a><br>
                                <a href="profile_delete_alert.php" class="mt-3">Delete Profile</a>
                            <p class="text-uppercase">project</p>
                                <a href="project_create.php" class="mt-3">Create Project</a><br>
                                
                                <a href="project_useronly.php?user_id=<?php echo $user_id ?>" class="mt-3">Your Project</a><br>
                                <a href="pj_read.php" class="mt-3">Search All Project</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <!-- Profile -->
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6 font-weight-bold">
                                                <?php echo "<span class='text-capitalize'>". $get_profile['first_name']."</span>" ?> 
                                                <?php echo "<span class='text-uppercase'>".$get_profile['last_name']."</span>" ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $get_profile['email'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Birthday</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $get_profile['birthday'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Website</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><a href="<?php echo $get_profile['website'] ?>">Click Here.</a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Register Date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $get_profile['create_date'] ?></p>
                                            </div>
                                        </div>
                            </div>
                            <!-- Project -->
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Preparing</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Support</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Preparing</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                <div class="col-md-6">
                                                <label>Your bio</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>When I was fifteen, sixteen, when I really started to play guitar
I definitely wanted to become a musician
It was almost impossible because—it was—the dream was so big
That I didn't see any chance because
I was living in a little town; was studying
And when I finally broke away from school and became a musician
I thought, "Well, now I may have a little bit of a chance"
Because all I really wanted to do is music
And not only play music, but compose music
At that time, in Germany, in '69, '70, they had already discotheques
So, I would take my car, would go to a discotheque
Sing maybe thirty minutes
I think I had about seven, eight songs
I would partially sleep in the car
Because I didn't want to drive home and that helped me for about
Almost two years to survive in the beginning
I wanted to do an album with the sounds of the '50s
The sounds of the '60s, of the '70s
And then have a sound of the future
And I said, "Wait a second, I know the synthesizer
Why don't I use the synthesizer which is the sound of the future?"
And I didn't have any idea what to do
But I knew I needed a click, so we put a click on the 24-track
Which then was synced to the Moog Modular
I knew that could be a sound of the future
But I didn't realize how much the impact would be
My name is Giovanni Giorgio
But everybody calls me Giorgio</p>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>








         





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>