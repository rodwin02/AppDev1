<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forum Hub</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container">

    <header class="header">
      <div class="header__logo">
        <img src="images/Forum Hub Logo.png" alt="Forum Hub Logo">
      </div>
      <div class="header__navbar">
        <ul>
          <li><input type="text" placeholder="Type Search Words"><img src="images/header_search-logo.png" alt=""></li>
        </ul>
      </div>
      <div class="header__profile">
        <div class="header__profile__bell">
          <img src="images/header_bell.png" alt="bell">
        </div>
        <div class="header__profile__info">
          <img src="images/header_profile.png" alt="profile-pic">
          <div class="header__profile__info__stats">
            <p>Sino Ka!</p>
            <p>Online</p>
          </div>
        </div>
        <div class="polygon">
          <img src="images/header_polygon.png" alt="polygon">
        </div>
      </div>
    </header>

    <div class="left-sidebar">
      <ul>
        <li><img src="images/left-sidebar-home-logo.png" alt="home-logo">Home</li>
        <li><img src="images/left-sidebar-id-card-logo.png" alt="id-card-logo">User Profile</li>
        <li class="menu"><img src="images/left-sidebar-menu-logo.png" alt="menu-logo">Category</li>
        <div class="left-sidebar__categories">
          <li><p>Data Structure</p></li>
          <li><p>Networking</p></li>
          <li><p>Data Base</p></li>
          <li><p>OS</p></li>
          <li><p>Java</p></li>
          <li><p>IOS</p></li>
          <li><p>HTML</p></li>
          <li><p>CSS</p></li>
          <li><p>Android</p></li>
          <li><p>Python</p></li>
        </div>
        <li><img src="images/left-sidebar-life-buoy-logo.png" alt="buoy-logo">Help</li>
      </ul>
    </div>

    <main class="main">
      <div class="main__header">
        <ul>
          <li>Recent question</li>
          <li>Most Answers</li>
          <li>Most Voted</li>
          <li>Most Visit</li>
        </ul>
      </div>

      <hr>
      
      <div class="p-container">
        <p class="out1" id="out1">Post: Nove 23, 2022 </p>
        <p class="out2" id="out2"></p>
        <p class="out3" id="out3"></p>
        <p class="out4" id="out4"></p>
        
      </div>
      

      <div class="main__comment">

        <div class="main__comment__section2">
          <p>Posted: Nov 23,2022 <span>In: Html,CSS</span></p>
          <p>Sino Ka!</p>
          <p>Difference between Static and Dynamic Hashing</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde mollitia quae eum! Sapiente nulla, sequi cum consectetur quasi repellendus aliquid voluptatibus tempora veritatis ullam, saepe perspiciatis animi reprehenderit necessitatibus dignissimos?
          Officia asperiores suscipit commodi debitis sed saepe in reiciendis, accusantium quo culpa neque atque, aperiam labore magni, nihil pariatur dicta praesentium. Eveniet minima cum enim. Corporis debitis consequatur quae mollitia.</p>
          <div class="main__comment__section2__footer">
            <div class="boxs">
              <button><div class="box"></div>Report</button>
              <button><div class="box"></div>12 Comments</button>
            </div>
            <button>Answer</button>
          </div>
        </div>
      </div>

    </main>

    <div class="right-sidebar">

      <div class="right-sidebar__header">
        <div class="right-sidebar__header__discussion" id="right-sidebar-disc">
          <a href="#" class="discussionbtn" id="discussionbtn">+ Start Discussion</a>
        </div>
      </div>

      <div class="right-sidebar__related">


        <div class="right-sidebar__related__category">
          <div class="cat"><p>Hot</p></div>
          <div class="cat"><p>Recent</p></div>
          <div class="cat"><p>Trending</p></div>
        </div>
        
        <div class="right-sidebar__related__category__bg">
        <div class="right-sidebar__related__category__bg__comments">
            <div class="image">
              <img src="images/right-sidebar-profile1.png" alt="">
            </div>
            <div class="com">
              <p>Difference between Static and 
                Dynamic Hashing</p>
                <p><img src="images/right-sidebar-chat-logo.png" alt="chat logo">12 Comments</p>
            </div>
        </div>

        <div class="right-sidebar__related__category__bg__comments">
          <div class="image">
            <img src="images/right-sidebar-profile1.png" alt="">
          </div>
          <div class="com">
            <p>Is Golang a low-level language
              like C?</p>
              <p><img src="images/right-sidebar-chat-logo.png" alt="chat logo">7 Comments</p>
          </div>
      </div>

      <div class="right-sidebar__related__category__bg__comments">
        <div class="image">
          <img src="images/right-sidebar-profile1.png" alt="">
        </div>
        <div class="com">
          <p>What it the best way to deal with
            poor quality code during code 
            reviews?</p>
            <p><img src="images/right-sidebar-chat-logo.png" alt="chat logo">2 Comments</p>
        </div>
      </div>
    </div>

      </div>

      <div class="right-sidebar__recent">

        <div class="">
          <p><img src="images/right-sidebar-recent.png" alt="recent">Recent Activity</p>
        </div>

        <div class="recent-info">
          <div class="">
          <img src="images/right-sidebar-profile2.png" alt="">
          </div>
          <div class="">
            <p><span>Sergio Aquinna</span> started following your
            question.</p>
            <p>March 25, 2022 at 5:30pm</p>
          </div>
        </div>

        <div class="recent-info">
          <div class="">
          <img src="images/right-sidebar-profile2.png" alt="">
          </div>
          <div class="">
            <p><span>Habaza</span> added a new question “Is Golang a 
              low-level language like C?”</p>
            <p>March 25, 2022 at 5:30pm</p>
          </div>
        </div>

        <div class="recent-info">
          <div class="">
          <img src="images/right-sidebar-profile2.png" alt="">
          </div>
          <div class="">
            <p><span>Abu Hashem</span> added a new question “What it the
              best way to deal with poor quality code during 
              code reviews?”</p>
            <p>March 25, 2022 at 5:30pm</p>
          </div>
        </div>

        <div class="more">
          <img src="images/right-sidebar-more.png" alt="">
        </div>

      </div>

    </div>
  </div>

  <form action="" id="frm-lang">
    <div class="create-post">
      <div class="create-post-container">
        <div class="close-container">
          <img src="images/close (1).png" alt="Close" class="close">
        </div>
        <input type="text" placeholder="Title" class="title-post" id="title-post">
        <textarea rows="13" cols="1" placeholder="Text (Optional)" class="title-text" id="title-text"></textarea>
        <div class="category-container" id="category"><p>Category:</p></br>
          <input type="checkbox" value="Data Structure" name="languages">
          <label for="datastructure">Data Structure</label>
          <input type="checkbox" value="Networking" name="languages">
          <label for="networking">Networking</label>
          <input type="checkbox" value="Data Base" name="languages">
          <label for="database">Data Base</label>
          <input type="checkbox" value="OS" name="languages">
          <label for="os">OS</label>
          <input type="checkbox" value="Java" name="languages">
          <label for="java">Java</label>
          <input type="checkbox" value="Andriod" name="languages">
          <label for="andriod">Andriod</label><br>
          <input type="checkbox" value="IOS" name="languages">
          <label for="ios">IOS</label>
          <input type="checkbox" value="HTML" name="languages">
          <label for="html">HTML</label>
          <input type="checkbox" value="Python" name="languages">
          <label for="python">Python</label>
          <input type="checkbox" value="CSS" name="languages">
          <label for="css">CSS</label>
          <!-- <button>btn</button> -->
        </div>
        <div class="bottom">
          <input type="file" id="file">
          <!-- <input type="button" id="postbtn" value="Post"> -->
          <button>Post</button>
        </div>
      </div>
    </div>
  </form>
  
  
  <script>

    const categories = document.querySelector('.left-sidebar__categories')
    const menuEl = document.querySelector('.menu')


    menuEl.addEventListener('click', () => {
    categories.classList.toggle('toggle')
})

    document.getElementById("discussionbtn").addEventListener("click", function(){
      document.querySelector(".create-post").style.display = "flex";
    })
    // Sign up will close
    document.querySelector(".close").addEventListener("click", function (){
      document.querySelector(".create-post").style.display = "none";
    })

    const title = document.getElementById('title-post');
    const text = document.getElementById('title-text');
    const category = document.getElementById('category');
    const post = document.getElementById('postbtn');
    const output1 = document.getElementById('out1');
    const output2 = document.getElementById('out2');
    const output3 = document.getElementById('out3');

    let from = document.getElementById('frm-lang');
    from.addEventListener('submit', function(e) {
      e.preventDefault();
      let checkboxes = document.getElementsByName('languages');
      for(let i = 0; i <checkboxes.length; i++) {
        if(checkboxes[i].checked == true) {
          output1.innerHTML += (checkboxes[i].value) + " ";  
          output2.innerHTML = title.value;
          output3.innerHTML = text.value;
        }
      }
     
    })


  </script>
</body>
</html>