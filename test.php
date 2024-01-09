<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.cdnfonts.com/css/gilroy-bold" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">
  <style>
    .container {
      display: grid;
      min-width: 300px;
    }
    @media (max-width: 767px) {
      .container {
        grid-template-columns: repeat(1, minmax(0, 1fr));
      }

    }
    @media (min-width: 767px) {
      .container {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }

      .block:last-child:nth-child(odd) {
        width: 200%;
        overflow: hidden;
      }
      .block:last-child:nth-child(odd) .half.image {
        width: 100%;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        overflow: hidden;
      }
      .block:last-child:nth-child(odd) .half.image img {
        width: 100%;
        height: auto;
        object-fit: cover;
      }
    }

    .block {
      display: flex;
      min-width: 30px;
      min-height: 20px;
      position: relative;
      overflow: hidden;
    }


    .block .half {
      display: grid;
      width: 50%;
      justify-content: center;
    }
    .block .half.info {
      background: white;
    }
    .block .half.info .info-wrapper {
      padding: 30px;
    }
    .block .half.info .info-wrapper div {
      padding-bottom: 10px;
    }
    .block .half.info .info-wrapper div.count {
      color: #004583;

    }
    .block .half.info .info-wrapper h3 {
      font-family: 'Gilroy-Bold', sans-serif;
      font-size: 24px;
      font-weight: 700;
      letter-spacing: -0.5px;
      text-align: left;
      margin-top: 12px;
      margin-bottom: 12px;
      text-transform: uppercase;
    }
    .block .half.info .info-wrapper div {
      font-family: 'Inter';
      font-size: 14px;
      font-weight: 400;
      line-height: 20px;
      letter-spacing: -0.5px;
      text-align: left;
      margin-bottom: 12px;
    }

    .block .half.image {
      max-height: 474px;
      overflow: hidden;
      background-size: cover;
      background-position: center;
    }
    .block .half.image img {
      height: 100%;
      overflow: hidden;
    }

    .rectangle {
      position: absolute;
      display: inline-block;
      width: 0;
      height: 0;
      border-left: 15px solid transparent;
      border-right: 15px solid transparent;
      border-bottom: 25px solid white;
    }
    .rectangle.left {
      transform: rotate(-90deg);
      margin-left: -60px;
      margin-top: 10px;
    }
    .rectangle.right {
      transform: rotate(90deg);
      margin-left: -4px;
      margin-top: 44px
    }
    button.round {
      height: 55px;
      width: 55px;
      border-radius: 30px;
      border: 1px solid #004583;
      background: white;
    }
    button.round img {
      position: relative;
      top: 2px;
    }
  </style>
</head>
<body>
  <div class="container">

  <!-- left picture -->
    <div class="block left">
      <!-- left half -->
      <div class="half image" style="background-image: url(img/pic1.png);"></div>
      <!-- /left half -->

      <!-- right half -->
      <div class="half info">
        <div class="info-wrapper">
          <div class="rectangle left"></div>
          <h3 class="left">Гостиные</h3>
          <div class="description">
            Мини текст описания и преимущества покупки данного направления.
          </div>
          <div class="count">
            Товары под заказ в наличии: 2030шт
          </div>
          <div class="price">
            Цены от: 42.000р
          </div>
          <button class="round">
            <img src="icons/arrow-left.svg" width="16" height="16" alt="Перейти">
          </button>
        </div>
      </div>
      <!-- /right half -->
    </div>
  <!-- /left picture -->

  <!-- left picture -->
    <div class="block left">
      <!-- left half -->
      <div class="half image" style="background-image: url(img/pic2.png);"></div>
      <!-- /left half -->

      <!-- right half -->
      <div class="half info">
        <div class="info-wrapper">
          <div class="rectangle left"></div>
          <h3 class="left">Спальни</h3>
          <div class="description">
            Мини текст описания и преимущества покупки данного направления.
          </div>
          <div class="count">
            Товары под заказ в наличии: 2030шт
          </div>
          <div class="price">
            Цены от: 42.000р
          </div>
          <button class="round">
            <img src="icons/arrow-left.svg" width="16" height="16" alt="Перейти">
          </button>
        </div>
      </div>
      <!-- /right half -->
    </div>
  <!-- /left picture -->

  <!-- right picture -->
    <div class="block right">
      <!-- left half -->
      <div class="half info">
        <div class="info-wrapper">
          <h3 class="left">Детские</h3>
          <div class="description">
            Мини текст описания и преимущества покупки данного направления.
          </div>
          <div class="count">
            Товары под заказ в наличии: 2030шт
          </div>
          <div class="price">
            Цены от: 42.000р
          </div>
          <button class="round">
            <img src="icons/arrow-right.svg" width="16" height="16" alt="Перейти">
          </button>
        </div>
      </div>
      <!-- /left half -->

      <!-- right half -->
      <div class="half image" style="background-image: url(img/pic3.png);">
          <div class="rectangle right"></div>
      </div>
      <!-- /right half -->
    </div>
  <!-- /right picture -->

  <!-- right picture -->
    <div class="block right">
      <!-- left half -->
      <div class="half info">
        <div class="info-wrapper">
          <h3 class="left">Прихожие</h3>
          <div class="description">
            Мини текст описания и преимущества покупки данного направления.
          </div>
          <div class="count">
            Товары под заказ в наличии: 2030шт
          </div>
          <div class="price">
            Цены от: 42.000р
          </div>
          <button class="round">
            <img src="icons/arrow-right.svg" width="16" height="16" alt="Перейти">
          </button>
        </div>
      </div>
      <!-- /left half -->

      <!-- right half -->
      <div class="half image" style="background-image: url(img/pic4.png);">
          <div class="rectangle right"></div>
      </div>
      <!-- /right half -->
    </div>
  <!-- /right picture -->

  <!-- left picture -->
    <div class="block left">
      <!-- left half -->
      <div class="half image" style="background-image: url(img/pic5.png); background-position: bottom;">
      </div>
      <!-- /left half -->

      <!-- right half -->
      <div class="half info">
        <div class="info-wrapper">
          <div class="rectangle left"></div>
          <h3 class="left">Кровати</h3>
          <div class="description">
            Мини текст описания и преимущества покупки данного направления.
          </div>
          <div class="count">
            Товары под заказ в наличии: 2030шт
          </div>
          <div class="price">
            Цены от: 42.000р
          </div>
          <button class="round">
            <img src="icons/arrow-left.svg" width="16" height="16" alt="Перейти">
          </button>
        </div>
      </div>
      <!-- /right half -->
    </div>
  <!-- /left picture -->

  </div>

  <script>
const container = document.querySelector('.container');
const blockLeft = Array.from(document.querySelectorAll('.block.left'));
const blockRight = Array.from(document.querySelectorAll('.block.right'));

function rearrangeBlocksOnMobile() {
  const windowWidth = window.innerWidth;

  // Если разрешение экрана мобильное
  if (windowWidth < 768) {
    container.innerHTML = '';

    // Переставляем блоки чередуясь через 1 элемент
    for (let i = 0; i < blockRight.length || i < blockLeft.length; i++) {
      if (i < blockLeft.length) {
        container.appendChild(blockLeft[i]);
      }
      if (i < blockRight.length) {
        container.appendChild(blockRight[i]);
      }
    }
  }
  // Если разрешение экрана больше мобильного
  else {
    container.innerHTML = '';

    // Переставляем блоки чередуясь через 2 элемента
    for (let i = 0; i < blockRight.length + 2; i += 2) {
      if (i < blockLeft.length) {
        container.appendChild(blockLeft[i]);
      }
      if (i + 1 < blockLeft.length) {
        container.appendChild(blockLeft[i + 1]);
      }
      container.appendChild(blockRight[i]);
      container.appendChild(blockRight[i + 1]);
    }
  }
}

window.addEventListener('load', rearrangeBlocksOnMobile);
window.addEventListener('resize', rearrangeBlocksOnMobile);
  </script>
</body>
</html>