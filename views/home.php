<?php
include('../controllers/user.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../assets/css/home.css">
</head>
<body>
    <nav>
        <div class="container">
            <h2 class="logo">
                SkillMate
            </h2>
            <div class="search-bar">
               <img id="icon" src="/icons/search-interface-symbol.png"  alt="">
               <input type="search" placeholder="Search for connection">
            </div>
            <div class="create">
                <label class="btn btn-primary" for="create-post">Create</label>
                <div class="profile-photo">
                    <img src="./images/profile-1.jpg" alt="">
                </div>
            </div>
        </div>
    </nav>

    <!-------------------------------- MAIN ----------------------------------->
    <main>
        <div class="container">
            <!----------------- LEFT -------------------->
            <div class="left">
                <a class="profile">
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg">
                    </div>
                    <div class="handle">
                        <h4></h4>
                        <p class="text-muted">
                            <?php echo "@".$username ?>
                        </p>
                    </div>
                </a>

                <!----------------- SIDEBAR -------------------->
                <div class="sidebar">
                    <a class="menu-item active">
                        <img src="icons/home.png" id="icon" style="padding-left: 20px;" alt="">
                        <!-- <span><i class="uil uil-home"></i></span> -->
                        <h3>Home</h3>   
                    </a>
                    <a class="menu-item">
                        <img src="icons/compass.png" id="icon" style="padding-left: 20px;" alt="">
                        <h3>Explore</h3>
                    </a>
                    <a class="menu-item"  id="notifications">
                        <img src="/icons/notification-bell.png" id="icon" style="padding-left: 20px;" alt="">
                        <h3>Notification</h3>
                        <!--------------- NOTIFICATION POPUP --------------->
                        <div class="notifications-popup">
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-2.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Sushant</b> accepted your friend request
                                    <small class="text-muted">2 Days Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-3.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Chetana</b> commented on your post
                                    <small class="text-muted">1 Hour Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-4.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Vaibhavi</b> and <b>283 Others</b> liked your post
                                    <small class="text-muted">4 Minutes Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-5.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Nishidha</b> commented on a post you are tagged in
                                    <small class="text-muted">2 Days Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-6.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Vaishali</b> commented on a post you are tagged in
                                    <small class="text-muted">1 Hour Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/profile-7.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Rohit</b> commented on your post
                                    <small class="text-muted">1 Hour Ago</small>
                                </div>
                            </div>
                        </div>
                        <!--------------- END NOTIFICATION POPUP --------------->
                    </a>
                    <a class="menu-item" id="messages-notifications">
                        <img src="icons/chat.png" id="icon" style="padding-left: 20px;" alt="">
                        <h3>Messages</h3>
                    </a>
                    <a class="menu-item">
                        <img src="icons/calendar (1).png" id="icon" style="padding-left: 20px;" alt="">
                        <h3>Schedule</h3>
                    </a>
                    <a class="menu-item">
                        <img src="icons/connection.png"  id="icon" style="padding-left: 20px;" alt="">
                        <h3>Network</h3>
                    </a>
                    <a class="menu-item" id="theme">
                        <img src="/icons/theme.png" id="icon" style="padding-left: 20px;" alt="">
                        <h3>Theme</h3>
                    </a>
                    <a class="menu-item">
                        <img src="icons/setting.png" id="icon" style="padding-left: 20px;" alt="">
                        <h3>Setting</h3>
                    </a>
                </div>
                <!----------------- END OF SIDEBAR -------------------->
                <label class="btn btn-primary" for="create-post">Create Post</label>
            </div>

            <!----------------- MIDDLE -------------------->
            <div class="middle">
                <form action="" class="create-post">
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg">
                    </div>
                    <input type="text" placeholder="What's on your mind, reaaaaa ?" id="create-post">
                    <input type="submit" value="Post" class="btn btn-primary">
                </form>
                <!----------------- FEEDS -------------------->
                <div class="feeds">
                    <!----------------- FEED 1 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-13.jpg">
                                </div>
                                <div class="info">
                                    <h3>Shobojeet Beera</h3>
                                    <small>Delhi, 15 Minutes Ago</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="img/175827174-113c97f1-9895-4a37-ba7d-37aa5040f63e.jpeg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/profile-10.jpg"></span>
                            <span><img src="./images/profile-4.jpg"></span>
                            <span><img src="./images/profile-15.jpg"></span>
                            <p>Liked by <b>Vaibhavi</b> and <b>23 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Shobojeet Beera</b> Completed my Blockchain - Basics to Advanced[2022]
                            <span class="harsh-tag">#blockchain</span></p>
                        </div>

                        <div class="comments text-muted">
                            View comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 1 -------------------->

                    <!----------------- FEED 2 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-10.jpg">
                                </div>
                                <div class="info">
                                    <h3>Ajay Thakur</h3>
                                    <small>Bihar, 2 Hours Ago</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="img/constructor-vs-method-in-java.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/profile-11.jpg"></span>
                            <span><img src="./images/profile-5.jpg"></span>
                            <span><img src="./images/profile-16.jpg"></span>
                            <p>Liked by <b>Sushant</b> and <b>23 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Ajay Thakur</b> Today i learned difference constructor methods 
                            <span class="harsh-tag">#lifestyle</span></p>
                        </div>

                        <div class="comments text-muted">
                            Viewcomments
                        </div>
                    </div>
                    <!----------------- END OF FEED 2 -------------------->

                    <!----------------- FEED 3 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-4.jpg">
                                </div>
                                <div class="info">
                                    <h3>Rashme Thakur</h3>
                                    <small>Pune, 50 Minutes Ago</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="img/12-modern-art-painting-the-design-studio-original-imag3ygyzhhzrqhv.webp">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/profile-12.jpg"></span>
                            <span><img src="./images/profile-13.jpg"></span>
                            <span><img src="./images/profile-14.jpg"></span>
                            <p>Liked by <b>Amey</b> and <b>33 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Rashme thakur</b>I was feeling bor so i did this painting  #painting # 
                            <span class="harsh-tag">#lifestyle</span></p>
                        </div>

                        <div class="comments text-muted">
                            View all 50 comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 3 -------------------->

                    <!----------------- FEED 4 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-5.jpg">
                                </div>
                                <div class="info">
                                    <h3>Sushant</h3>
                                    <small>Pune, 1 Hour Ago</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="img/e03edbe588d3866d539e5bbb35d9080c.jpeg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/profile-10.jpg"></span>
                            <span><img src="./images/profile-4.jpg"></span>
                            <span><img src="./images/profile-15.jpg"></span>
                            <p>Liked by <b>vaishalo</b> and <b>5, 323 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b></b> !(succeed == try())
                            <span class="harsh-tag">#lifestyle</span></p>
                        </div>

                        <div class="comments text-muted">
                            View all 540 comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 4 -------------------->

                    <!----------------- FEED 5 -------------------->
                    <!-- <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-7.jpg">
                                </div>
                                <div class="info">
                                    <h3>Keylie Hadid</h3>
                                    <small>Dubai, 3 Hours Ago</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/feed-7.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/profile-10.jpg"></span>
                            <span><img src="./images/profile-4.jpg"></span>
                            <span><img src="./images/profile-15.jpg"></span>
                            <p>Liked by <b>Riana Rose</b> and <b>1, 226 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Keylie Hadid</b> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem obcaecati nisi veritatis quisquam eius accusantium rem quo repellat facilis neque.
                            <span class="harsh-tag">#lifestyle</span></p>
                        </div>

                        <div class="comments text-muted">
                            View all 199 comments
                        </div>
                    </div> -->
                    <!----------------- END OF FEED 5 -------------------->

                    <!----------------- FEED 6 -------------------->
                    <!-- <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-15.jpg">
                                </div>
                                <div class="info">
                                    <h3>Benjamin Dwayne</h3>
                                    <small>New York, 5 Hours Ago</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/feed-2.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/profile-10.jpg"></span>
                            <span><img src="./images/profile-4.jpg"></span>
                            <span><img src="./images/profile-15.jpg"></span>
                            <p>Liked by <b>Ernest Achiever</b> and <b>2, 323 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Benjamin Dwayne</b> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, consequuntur!
                            <span class="harsh-tag">#lifestyle</span></p>
                        </div>

                        <div class="comments text-muted">
                            View all 277 comments
                        </div>
                    </div> -->
                    <!----------------- END OF FEED 6 -------------------->

                    <!----------------- FEED 7 -------------------->
                    <!-- <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/profile-3.jpg">
                                </div>
                                <div class="info">
                                    <h3>Indiana Ellison</h3>
                                    <small>Qatar, 8 Hours Ago</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/feed-6.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/profile-10.jpg"></span>
                            <span><img src="./images/profile-4.jpg"></span>
                            <span><img src="./images/profile-15.jpg"></span>
                            <p>Liked by <b>Benjamin Dwayne</b> and <b>2, 323 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Indiana Ellison</b> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur itaque quasi autem pariatur ducimus eligendi, qui odio molestias at molestiae. 
                            <span class="harsh-tag">#lifestyle</span></p>
                        </div>

                        <div class="comments text-muted">
                            View all 277 comments
                        </div>
                    </div> -->
                    <!----------------- END OF FEED 7 -------------------->
                </div>
                <!----------------- END OF FEEDS -------------------->
            </div>
             <!----------------- END OF MIDDLE -------------------->

            <!----------------- RIGHT -------------------->
            <div class="right">
                <!------- MESSAGES ------->
                <div class="messages">
                    <div class="heading">
                        <h4></h4>
                        <i class="uil uil-edit"></i>
                    </div>
                    <!------- SEARCH BAR ------->
                    <div class="search-bar">
                        <i class="uil uil-search"></i>
                        <input type="search" placeholder="Search messages" id="message-search">
                    </div>
                    <!------- MESSAGES CATEGORY ------->
                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6>General</h6>
                        <h6 class="message-requests">Requests (7)</h6>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-17.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Vaishali Chavan</h5>
                            <p class="text-muted">Done with yesterday works</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-6.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Vaibhavi Bondre</h5>
                            <p class="text-bold">2 new messages</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-8.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Shreeram</h5>
                            <p class="text-muted">lol u right</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-10.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Sahasi</h5>
                            <p class="text-muted">Birtday Tomorrow</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-3.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Chetana Rane</h5>
                            <p class="text-bold">5 new messages</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-15.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Aditya </h5>
                            <p class="text-muted">haha got that!</p>
                        </div>
                    </div>
                </div>
                <!------- END OF MESSAGES ------->

                <!------- FRIEND REQUEST ------->
                <div class="friend-requests">
                    <h4>Requests</h4>
                    <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="./images/profile-20.jpg">
                            </div>
                            <div>
                                <h5>Amey</h5>
                                <p class="text-muted">8 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="./images/profile-18.jpg">
                            </div>
                            <div>
                                <h5>Ruturaj</h5>
                                <p class="text-muted">2 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="./images/profile-17.jpg">
                            </div>
                            <div>
                                <h5>Snehal</h5>
                                <p class="text-muted">5 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------- END OF RIGHT -------------------->
        </div>
    </main>

    <!----------------- THEME CUSTOMIZATION -------------------->
    <div class="customize-theme">
        <div class="card">
            <h2>Customize your view</h2>
            <p class="text-muted">Manage your font size, color, and background</p>

            <!----------- FONT SIZE ----------->
            <div class="font-size">
                <h4>Font Size</h4>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2 active"></span>
                        <span class="font-size-3"></span>
                        <span class="font-size-4"></span>
                        <span class="font-size-5"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>

            <!----------- PRIMARY COLORS ----------->
            <div class="color">
                <h4>Color</h4>
                <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>

            <!----------- BACKGROUND COLORS ----------->
            <div class="background">
                <h4>Background</h4>
                <div class="choose-bg">
                    <div class="bg-1 active">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-2">
                        <span></span>
                        <h5 for="bg-2">Dim</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Dark</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/home.js"></script>
</body>
</html>