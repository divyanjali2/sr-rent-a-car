<div class="vehicleCard">
  <div class="vehicleCard__top">
      <p class="vehicleCard__title">[[+car_category:ucfirst:htmlent]]</p>    <div class="vehicleCard__icons">
    </div>
  </div>
  <div class="text-center">
    <span class="vehicleCard__icon">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="#000">
        <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-4.4 0-8 2.2-8 5v3h16v-3c0-2.8-3.6-5-8-5z"/>
      </svg>
      [[+pax_count]]
    </span>

    <span class="vehicleCard__icon">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="#000">
        <path d="M6 7V6a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v1h1a2 2 0 0 1 2 2v9H3V9a2 2 0 0 1 2-2h1zm2 0h8V6H8v1z"/>
      </svg>
      [[+luggage_count]]
    </span>
  </div>

  <img class="my-4 vehicleCard__img" src="[[+image]]" alt="[[+car_category:htmlent]]">

  <div class="vehicleCard__price">
    [[+price:isnot=``:then=`from <strong>[[+price]]</strong>`:else=``]]
  </div>
</div>