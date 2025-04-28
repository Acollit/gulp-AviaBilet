import Swiper from 'swiper';
import { Navigation, Pagination, Grid, Thumbs } from 'swiper/modules';
Swiper.use([Navigation, Pagination, Grid, Thumbs]);

const HeroSwiper = new Swiper('.feed__swiper', {
  slidesPerView: 'auto',
  spaceBetween: 24,




});
