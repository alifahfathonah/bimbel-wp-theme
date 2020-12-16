<?= get_header(); ?>

<!-- Tentang Bimbel academia -->
<div class="tentang">
     <h1 style="text-align:center;">Apa Kata Mereka <span>Tentang bimbel academia ?</span></h1>
     <div class="kata">
          <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/ak.jpg" alt="Fitri">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ipsa nam expedita unde, totam maiores, cumque ad doloribus nesciunt dignissimos ratione, aspernatur officiis quis veritatis blanditiis asperiores vitae necessitatibus minima. <br> <br> <span>- Safitri</span></p>
     </div>
</div>

<!-- Masalah saat ini -->
<div class="masalah">
     <div class="imgMas">
          <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/stress.jpg" alt="Masalah">
     </div>
     <div class="captMas">
          <h1>Permasalahan yang Sering dihadapi mahasiswa</h1>
          <p class="mat">Materi yang dibahas dikampus kurang lengkap</p>
     </div>
</div>

<!-- Fakta Academia -->
<div class="fakta">
     <div class="judul">
          <h1>Fakta Tentang Bimbel ACademia</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptatum voluptatibus quae tenetur eos repudiandae ab ea perferendis ullam nobis nemo, eaque ipsum neque doloribus! Dolorum temporibus consectetur eaque ipsam.</p>
     </div>
     <div class="lulusan">
          <div class="img">
               <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/lulusan.jpg" alt="Lulusan Terbaik">
          </div>
          <div class="capt">
               <h2>Telah menghasilkan Mahasiswa lulusan terbaik</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam exercitationem inventore consectetur eaque illo excepturi corporis laborum, mollitia animi ipsa aspernatur quae velit a aut sunt? Officiis atque at ullam!</p>
          </div>
     </div>
     <div class="lulusan">
          <div class="img">
               <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/belajar.jpg" alt="Lulusan Terbaik">
          </div>
          <div class="capt">
               <h2>Terbukti dengan para lulusan</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam exercitationem inventore consectetur eaque illo excepturi corporis laborum, mollitia animi ipsa aspernatur quae velit a aut sunt? Officiis atque at ullam!</p>
          </div>
     </div>
</div>

<!-- Pengenalan Academia -->
<div class="pengenalan">
     <div class="img">
          <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/tos.png">
     </div>
     <div class="capt">
          <h1>Pengenalan academia</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit nemo beatae id iusto unde corrupti asperiores fugit quam eveniet nobis recusandae assumenda dolores dicta hic perspiciatis, aut temporibus. Voluptate, asperiores!</p>
     </div>
</div>

<!-- Kelebihan bimbel di academia -->
<div class="kelebihanBim">
     <h1>Kelebihan Bimbel Academia</h1>
</div>
<div class="kelebihan">
     <div class="kel">
          <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/file.png" alt="">
          <h3>File dapat di download</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
     </div>
     <div class="kel">
          <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/phone.png" alt="">
          <h3>File dapat di download</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
     </div>
     <div class="kel">
          <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/pc.png" alt="">
          <h3>File dapat di download</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
     </div>

</div>

<!-- Keutungan bimbel di academia -->
<div class="keuntungan">
     <div class="untung">
     <div class="img">
          <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/untung.png" alt="">
     </div>
     <div class="capt">
          <h1>Apa saja keuntungan yang didapat dari bimbel academia</h1>
          <p>Kamu dapat belajar lebih banyak saat waktu waktu senggang, BIMBEL ACADEMIA dapat diakses kapan saja dan dimana saja, materi yang diberikan dapat mudah dipahami dan video pembejaran dapat di download</p>
     </div>
     </div>
</div>

<!-- <div class="video">
<div class="konten">
     <div class="img">
          <img src="< ?= get_bloginfo('stylesheet_directory') ?>/asset/img/video.png" alt="Akses video">
     </div>
     <div class="capt">
          <p>Dapatkan video Premium semua mata kuliah</p>
          <h1>dengan harga khusus Rp. 50.000</h1>
          <button>Beli Sekarang</button>
     </div>
</div>
</div> -->


<div class="blog">
     <div class="judul"> <h1 style="text-align:center;">Blog</h1></div>
     <div class="post">
          <?php if(have_posts()){
               while(have_posts()){
                    the_post(); ?>
                    <div class="postingan">
                         <img src="<?= get_the_post_thumbnail_url(); ?>" alt="Gambar Untuk <?= the_title(); ?>">
                         <h3><a href="<?= the_permalink(); ?>"> <?= the_title(); ?> </a></h3>
                    </div>
                    <?php
               }//Endwhile
          }//Endif
     ?>
     </div>
</div>



<!-- <div class="bonus">
     <div class="capt">
          <h1>Bonus</h1>
          <p>Dapatkan E-BOOK gratis untuk yang baru <br> bergabung bersama BIMBEL ACADEMIA</p>
     </div>
     <div class="img">
          <img src="< ?= get_bloginfo('stylesheet_directory') ?>/asset/img/bonus.png" alt="">
     </div>
</div> -->

<?= get_footer(); ?>