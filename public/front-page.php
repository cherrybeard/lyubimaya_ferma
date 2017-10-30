<?php get_header(); ?>
<header class="header">
  <h1 class="logo">Любимая ферма</h1>
  <h2>Новый формат <span>фермерского рынка</span>
  </h2>
  <p>Москва, Носовихинское шоссе 4</p>
</header>
<div class="mission">
  <div class="intro">
    <h2>Наша миссия</h2>
    <p> <strong>«Любимая ферма» </strong>создана для ценителей вкусной и здоровой еды. <span class="cont">Для тех, кто стремится получать лучшее и поддерживает фермеров и производителей натуральных продуктов.</span></p>
  </div>
  <div class="bigger-than-market">
    <div class="text"> 
      <h3>Больше, чем рынок</h3>
      <p>«Любимая ферма» — это не только место для покупок, у нас вы сможете увидеть и попробовать всё разнообразие русской, вьетнамской, среднеазиатской кухонь и других мировых кулинарных направлений, которые широко представлены на нашем фуд-корте. </p>
    </div>
  </div>
  <div class="new-format"><strong>«Любимая ферма»</strong> — это новый формат локального торгового пространства.
  </div>
  <div class="love-our-work">
    <div class="text">
      <h3>Любим своё дело</h3>
      <p>Мы собрали всех вместе — фермеров, энтузиастов и людей, любящих своё дело и желающих поделиться своими продуктами, блюдами и настроением со всеми, кто придёт к нам в гости!</p>
      <p>Вы сможете посетить кулинарные шоу и мастер классы. И все это в шаговой доступности от вашего дома.</p>
      <p class="invitation">Ждем всех в&nbsp;ТК&nbsp;Никольский&nbsp;парк!</p>
    </div>
  </div>
</div>
<div class="what-we-have"> 
  <h2>Что&nbsp;у&nbsp;нас&nbsp;есть</h2>
  <ul class="product">
    <li class="product-item veg">Овощи и фрукты</li>
    <li class="product-item meat">Свежие мясо и рыба</li>
    <li class="product-item candy">Кондитерские изделия</li>
    <li class="product-item tea">Напитки, чай, кофе</li>
    <li class="product-item milk">Молочная продукция</li>
    <li class="product-item soap">Бытовая химия</li>
  </ul>
</div>
<div class="our-life">
  <h2>Наша жизнь</h2>
  <div class="news-previews"><?php
	$args = array( 'numberposts' => '3' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
?>
	<div class="news-preview">
		<div class="image"<?php
			if ( $thumbnail_id = get_post_thumbnail_id($recent["ID"]) ) {
					if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) )
							printf( ' style="background-image: url(%s);"', $image_src[0] );
			}
		?>></div>
		<div class="text">
			<a href="<?php echo get_post_type_archive_link( 'post' ); ?>">
				<h3><?php echo $recent["post_title"]; ?></h3>
			</a>
			<time class="date"><?php echo get_the_date('', $recent['ID']); ?></time>
			<p><?php echo get_the_excerpt($recent['ID']); ?></p>
		</div>
	</div>
<?php
	};
	wp_reset_query();
?>

  </div><a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="more-news">Еще новости</a>
</div>
<div class="expertise">
  <div class="expertise-content">
    <div class="text">
      <h2>Экспертиза</h2>
      <p>Вся продукция, представленная на&nbsp;витринах нашего пространства, гарантированно проходит не&nbsp;только государственную ветеринарную проверку, но и&nbsp;нашу собственную экспертизу.  </p>
      <p>Поэтому мы с&nbsp;уверенностью гарантируем качество продукции.</p>
    </div>
  </div>
</div>
<div class="count">
  <div class="count-item"><strong>30</strong>
    <p>продавцов с&nbsp;которыми можно торговаться</p>
  </div>
  <div class="count-item"><strong>1500</strong>
    <p>м² свежих продуктов</p>
  </div>
  <div class="count-item"><strong>5</strong>
    <p>кафе с&nbsp;разнообразными блюдами</p>
  </div>
</div>
<div class="tenants">
  <h2>Арендаторам</h2>
  <p><span>«Любимая ферма»</span> совмещает ряд ключевых преимуществ, и&nbsp;подойдёт и&nbsp;для&nbsp;опытных дилеров, и&nbsp;для&nbsp;начинающих.
  </p>
  <div class="features">
    <div class="features-item free">Пробные пять рабочих дней бесплатно</div>
    <div class="features-item place">Готовое торговое место под ключ</div>
    <div class="features-item seo">Маркетинг продвижение включено</div>
  </div>
  <div data-callback-state="button" class="callback">
    <button data-callback-show="data-callback-show">Обратный звонок</button>
    <form action="" method="post" data-callback-form="data-callback-form">
      <div class="text-input">
        <input type="tel" placeholder="Телефон" name="phone"/>
      </div>
      <button type="submit">Перезвоните мне</button>
    </form>
  </div>
</div>
<footer class="footer">
  <div class="contacts-block">
    <div class="contacts"> 
      <h2>«Любимая ферма»</h2>
      <p>Каждый день с 7:00 до 21:00</p>
      <p>Москва, Носовихинское шоссе 4 <a href="https://yandex.ru/maps/-/CBUxRQbSGB">(Открыть&nbsp;в&nbsp;Яндекс.Картах)</a>
      </p>
      <p><a href="tel:+78009567664">+7&nbsp;800&nbsp;956&nbsp;7664</a></p>
    </div>
  </div>
</footer><?php get_footer(); ?>