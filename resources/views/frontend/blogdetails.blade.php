@extends('layouts.master')
@section('content')

<style>
    body{
    color: #6F8BA4;
    margin-top:20px;
}
.section {
    padding: 100px 0;
    position: relative;
}
.gray-bg {
    background-color: #f5f5f5;
}
img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}
/* About Me 
---------------------*/
.about-text h3 {
  font-size: 45px;
  font-weight: 700;
  margin: 0 0 6px;
}
@media (max-width: 767px) {
  .about-text h3 {
    font-size: 35px;
  }
}
.about-text h6 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .about-text h6 {
    font-size: 18px;
  }
}
.about-text p {
  font-size: 18px;
  max-width: 450px;
}
.about-text p mark {
  font-weight: 600;
  color: #20247b;
}

.about-list {
  padding-top: 10px;
}
.about-list .media {
  padding: 5px 0;
}
.about-list label {
  color: #20247b;
  font-weight: 600;
  width: 88px;
  margin: 0;
  position: relative;
}
.about-list label:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  right: 11px;
  width: 1px;
  height: 12px;
  background: #20247b;
  -moz-transform: rotate(15deg);
  -o-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
  margin: auto;
  opacity: 0.5;
}
.about-list p {
  margin: 0;
  font-size: 15px;
}

@media (max-width: 991px) {
  .about-avatar {
    margin-top: 30px;
  }
}

.about-section .counter {
  padding: 22px 20px;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
}
.about-section .counter .count-data {
  margin-top: 10px;
  margin-bottom: 10px;
}
.about-section .counter .count {
  font-weight: 700;
  color: #20247b;
  margin: 0 0 5px;
}
.about-section .counter p {
  font-weight: 600;
  margin: 0;
}
mark {
    background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: 0 bottom;
    background-color: transparent;
    padding: 0;
    color: currentColor;
}
.theme-color {
    color: #fc5356;
}
.dark-color {
    color: #20247b;
}

/* .about-avatar img{
    margin-right: 250px;
    
} */

#org-picture{
    position: absolute;
    top:5px;
    left: 10px;
}
.about-avatar img{
    width: 90%;
    margin-top: 20px;
    margin-bottom: 20px;
}

#org-info{
    
}
h4 span{
    font-weight: bold;
    color: black;
}
</style>

<section class="section about-section gray-bg" id="about">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                   
                        
                    <h3 class="dark-color">Title</h3>
                    
                    
                    <div class="row about-list" id="org-info">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam eligendi rem magni est beatae aliquid animi soluta. Modi magni voluptate quam sit iusto quibusdam, incidunt illum fugit reiciendis velit qui aliquid fuga nihil dignissimos corrupti est enim dolore. Quasi consectetur nemo dolorum! Pariatur nobis itaque dolorum quo commodi cum aperiam accusamus ducimus tenetur repellendus! Eveniet quam ipsum sint! Magnam sequi quia, numquam illum nihil soluta! Quisquam atque ut quaerat quia veritatis ex culpa qui sequi cumque maxime consequuntur accusantium minima necessitatibus et nulla quidem nam tenetur velit magnam autem laudantium suscipit, harum maiores quasi. Quae error aliquam ipsa libero iste earum ut veniam odio cupiditate quis sint dolorem incidunt, maiores voluptatibus sunt facilis sapiente illo quos? Dolores commodi quasi eius, optio, saepe vero ipsam repellendus minus explicabo, repudiandae blanditiis distinctio aspernatur impedit. Mollitia, eius. Quis iste, deserunt eligendi qui fuga delectus voluptas voluptatum repellendus nobis esse autem facilis nulla aliquid voluptates officiis culpa doloribus eius reiciendis? Debitis libero recusandae similique voluptatibus non reiciendis doloribus ut culpa mollitia obcaecati corrupti facere cumque, soluta vitae rerum dignissimos eveniet odit sequi maxime at unde modi incidunt perferendis. Magnam ea voluptatum quam at facilis laborum repudiandae fuga ratione culpa eveniet deleniti, ipsa odit eius, rem assumenda alias numquam. Id totam, dolores ad officia quidem fugit? Esse dolorum tenetur libero labore at exercitationem iusto excepturi, sint eius culpa doloribus quae ratione, ea ducimus laudantium aut inventore repudiandae sit reprehenderit beatae, ullam consectetur! Mollitia qui, facere enim accusantium reiciendis totam labore nobis eveniet asperiores, eaque esse dolorum explicabo recusandae, beatae iste? Possimus, recusandae ducimus modi ad reiciendis voluptatum accusamus iste, accusantium veniam esse ex! Perspiciatis voluptatem similique ullam consequatur odit. Explicabo dolor rem aliquam neque provident impedit error fuga esse, quisquam quaerat nihil iste nisi est labore aliquid? Consequuntur facere doloremque dolores quibusdam accusantium sit impedit consequatur, voluptates est in suscipit? Saepe, magnam! Nulla vitae explicabo eligendi enim illo? Quaerat ipsam, ut in error ipsum soluta dolores sit dolorum cumque quidem eveniet blanditiis, esse eum quisquam? Magni perspiciatis enim illum labore, explicabo dolorem, ut, nulla aliquid at maxime fugit deleniti? Illo porro libero nisi dolor obcaecati quae rem earum reprehenderit culpa distinctio, suscipit explicabo, ut minima eos esse debitis illum provident, architecto quia nesciunt vitae commodi. Odit perspiciatis dolor, tenetur ex rerum cumque possimus aperiam a quo soluta, pariatur omnis consectetur. Odio ut debitis, eos expedita architecto culpa dolorem quidem cupiditate numquam aut maxime quam rerum harum! Officiis nihil quisquam distinctio ad accusantium voluptate assumenda, sed eum tempore veniam eligendi explicabo autem asperiores ex quas sapiente nostrum quasi iste. Debitis consequatur possimus ea corporis, at nemo fuga, iusto quo distinctio totam nulla nisi repudiandae tempora non exercitationem molestias. Enim aperiam nulla dolorem ducimus quo inventore, repudiandae, officia tempore exercitationem dolorum aut necessitatibus ex dolore voluptatum nemo unde quam assumenda veniam labore aliquam tempora nesciunt, consequuntur natus? Provident consectetur nesciunt quidem eius recusandae reprehenderit magnam. Architecto corporis doloremque quisquam saepe libero, sapiente placeat animi assumenda recusandae in nemo harum itaque, distinctio vel iste voluptatibus velit molestias quod?</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="org-picture">
                <div class="about-avatar">
                    <img src="images/2.png" class="card-img-top" alt="...">
                </div>
            </div>
            {{-- @endforeachs --}}
        </div>
        
            
        </div>
    </div>
</section>

@endsection