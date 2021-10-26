 <h2 class="section-heading calm-voice">Day 1</h2>

 <section class="project-info">
    <h3 class="calm-voice">Source:
         <a href="https://www.reuters.com/" target="_blank">Reuters</a>
    </h3>
        <h3 class="calm-voice"> Read the
         <a href="https://alexvong.substack.com/p/responsive-layout-challenge-day-1" target="_blank">Case Study</a>
    </h3>
 </section>


<section class="container">
    <div class="main-card">
        <div class="calm-voice card-heading">AOL</div>
        
        <h2 class="heading attention-voice">Experts prove that Responsive Layouts are important for Websites</h1>
        
        <div class="quiet-voice">By: Alex Vong - 10/25/2021</div>
       
        <picture>
            <img src="images/responsive-img.svg" alt="">
        </picture>
        
        <p class="calm-voice">Responsive design can help you solve a lot of problems for your website. It will make your site mobile-friendly, improve the way it looks on devices with both large and small screens, and increase the amount of time that visitors spend on your site. It can also help you improve your rankings in search engines.
        </p>
    </div>



    <section class="article-grid"> 
        <?php

        for ($i = 0; $i < 6; $i++) { ?>
          
          <div class="article-card">
            <div class="card-info">
               <div class="quiet-voice card-heading">Some Heading</div>
               <p class="calm-voice">Short introduction or description of the main story</p>
               <div class="quiet-voice">Date of Article</div>
             </div>

           <picture>
               <img src="images/responsive-img.svg" alt="">
           </picture>

         </div>
        <?php }

        ?>
    </section>

</section>