<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/YOUR-KIT-CODE.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>

  body
  {
  background-color:#A7C7E7;
  }
  .about2{
    width: 1000px;
    height: 100vh;
  }
 .navbar{
  height: 70px;
 }
html{

  scroll-behavior: smooth;
}
.carousel-inner{
  height: 100vh;
}
.about{
 
  padding-top: 200px;
  box-sizing: border-box;
 
   text-align:center;
  padding-bottom: 200px;
  
}

h1{
  
font-family: poppin;
  font-size: 4em;
}
h3{
  padding-top: 15px;
  font-family: FoundersGrotesk, Helvetica, Arial, sans-serif;
  
  font-style: normal;
}

h2{
  font-family: poppin;
text-align: center;
  font-weight: 700;
  font-size: 2em;
}
p{
  font-size: 1em;
}
.wrapper {
  
  background-color: #ADBBDA;
  margin-left: 50%;
  width: 80vw;
  max-width: 41em;
  min-height: 25em;
  border-radius: 0.6em;
  transform: translate(-50%, -50%);
  left: 50%;
  top: 50%;
  box-shadow: 0 1.8em 3em rgba(1, 17, 39, 0.15);
  display: flex;
}
.testimonial-container {
  width: 85%;
  height: 100%;
  padding-left: 50%;
 text-align: center;
  margin: auto;
  padding: 1.8em 1.2em;
}
.wrapper button {
  font-size: 1.8em;
  height: 2.2em;
  width: 2.2em;
  background-color: #FFF;
  position: absolute;
  margin: auto;
  top: 0;
  bottom: 0;
  border: none;
  color: #0a69ed;
  box-shadow: 0 0 1em rgba(1, 17, 39, 0.25);
  cursor: pointer;
  border-radius: 50%;
}
button#next {
  right: -1.1em;
}
button#prev {
  left: -1.1em;
}

.about{
  box-sizing: border-box;
  border-radius: 45PX;
  margin: 45px 45px 45px 45px;
  color: azure;
  font-weight: 500;
  text-align:center ;
  padding-bottom: 200px;

}
.alignment
{
  padding-left: 22%;
  text-align: center;
  margin: 0;
  padding-bottom:200px ;
}
.blank
{
  padding-bottom: 250px;
  background-color: aliceblue;
  background-size: cover;
  width: 100%;
  height:70vh;

}
.blank2{
  padding-top:18% ;
  background-color: #3D52A0;
  width:100%;
  height:15vh;
   
}
.text{
  padding-bottom: 0;
}
.navbar{
  background-color: #3D52A0;
  font-size: large;
  
}
.heading1{
  font-weight: 600;
}
.text2{
  padding-top: 300px;
  padding-bottom:50px ;
}

.col-lg-6{
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}


.heading{
  position: absolute;
  display: flex;
  justify-content:center;
  align-items: center;
  padding-bottom: 200px;

}
.text3{
  padding-bottom: 50px;
}
.card1
{
  padding-bottom: 50px;
}
.card2{
  padding-bottom: 50px;
}
.card3{
  padding-bottom: 300px;

}
.text4{
  padding-bottom: 250px;
  color: aliceblue;
}
.footer {
    background-color: #f0f0f0;
    padding: 30px 0;
    font-family: Arial, sans-serif;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex; /* Enable flexbox */
    justify-content: space-between;
}
.text5{
  color: #FFF;
}
.footer-column {
    flex: 1; /* Distribute columns evenly */
    margin: 0 15px; /* Add some spacing */
}

.footer-column h3 {
    margin-bottom: 15px;
}

.footer-column ul {
    list-style: none;
    padding: 0;
}

.footer-column ul li a {
    color: #333;
    text-decoration: none;
}

.social-icons a {
    margin-right: 10px;
}

.support-text {
    font-weight: bold;
    font-weight: 700;
}
nav ul li a,
nav ul li a:after,
nav ul li a:before {
  transition: all .5s;
}
nav ul li a:hover {
  color: #fff;
}
nav.navbar ul li a{
  position: relative;
}
nav.navbar ul li a:after {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  width: 0%;
  content: '.';
  color: transparent;
  background: #aaa;
  height: 1px;
}
nav.navbar ul li a:hover:after {
  width: 100%;
}
.nav-item{
  font-weight: 400;
}
.nav-link {
   color: #ffff;
}
.navbar-brand{
  color: #ffff;
  font-weight: 600;
}
.navbar-brand:hover{
  color: #ffff;
}
.nav-link:hover{
  color: #aaa;
}
article {
  --img-scale: 1.001;
  --title-color: black;
  --link-icon-translate: -20px;
  --link-icon-opacity: 0;
  position: relative;
  border-radius: 16px;
  box-shadow: none;
  background: #fff;
  transform-origin: center;
  transition: all 0.4s ease-in-out;
  overflow: hidden;
}

article a::after {
  position: absolute;
  inset-block: 0;
  inset-inline: 0;
  cursor: pointer;
  content: "";
}


article h2 {
  margin: 0 0 18px 0;
  
  font-size: 1.9rem;
  letter-spacing: 0.06em;
  color: var(--title-color);
  transition: color 0.3s ease-out;
}

figure {
  margin: 0;
  padding: 0;
  aspect-ratio: 16 / 9;
  overflow: hidden;
}

article img {
  max-width: 100%;
  transform-origin: center;
  transform: scale(var(--img-scale));
  transition: transform 0.4s ease-in-out;
}

.article-body {
  padding: 24px;
}

article a {
  display: inline-flex;
  align-items: center;
  text-decoration: none;
  color: #28666e;
}

article a:focus {
  outline: 1px dotted #28666e;
}

article a .icon {
  min-width: 24px;
  width: 24px;
  height: 24px;
  margin-left: 5px;
  transform: translateX(var(--link-icon-translate));
  opacity: var(--link-icon-opacity);
  transition: all 0.3s;
}
.about{
  margin-top: 50px;
}

.articles {
  padding-bottom: 100px;
  display: grid;
  max-width: 1200px;
  margin-inline: auto;
  padding-inline: 24px;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  gap: 24px;
}

@media screen and (max-width: 960px) {
  article {
    container: card/inline-size;
  }
  .article-body p {
    display: none;
  }
}

@container card (min-width: 380px) {
  .article-wrapper {
    display: grid;
    grid-template-columns: 100px 1fr;
    gap: 16px;
  }
  .article-body {
    padding-left: 0;
  }
  figure {
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  figure img {
    height: 100%;
    aspect-ratio: 1;
    object-fit: cover;
  }
}

.sr-only:not(:focus):not(:active) {
  clip: rect(0 0 0 0); 
  clip-path: inset(50%);
  height: 1px;
  overflow: hidden;
  position: absolute;
  white-space: nowrap; 
  width: 1px;
}
.article-wrapper p{
  color: #333;
}

.card{
  background-color:#fff;
  width: 250px;
  height: 400px;
  box-sizing: border-box;
 margin-left: 50px;
  display: flex;
  justify-content: center;
  padding-bottom: 20px;
  border:none;
}
.row{
  background-color: #fff;
}
.specialisation{
  margin-right: 15px;
  background-color: #fff;
  text-align: center;
  }
  .card img{
    padding-bottom: 25px;
   margin-left: 75px;
   margin-right: 75px;

  }
  .footer{
    margin-top: 250px;
  }
 .about01{
 
  background-color: #fff;
 }
  .about3{
    background-image: url(slider/360_F_641938894_rKGnLeNpwnaD4RkzKzVFNlTw4EI44NNm.jpg);
    background-repeat: no-repeat;
    background-size: 1517px 100vh;
    width:100%;
    padding-right: 15px;
    height: 100vh;
    position: relative;
   
  }
  section {
   padding-top: 100px;
  display: flex;
  flex-flow: row wrap;
}

P {
  overflow: hidden;
  text-overflow: ellipsis;
  font-size: 16px;
}

H1 {
  font-family: "IBM Plex Sans", sans-serif;
  font-weight: 100;
  text-transform: uppercase;
  font-size: 28px;
}

figure {
  margin: 0px;
}

figure img {
  width: 100%;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

figure img:hover {
  opacity: 0.6;
  transition: all .3s linear;
}
.column {
  box-sizing: border-box;
  flex: 1 100%;
  justify-content: space-evenly;
  margin: 20px;
  height: 70vh;
  background-color: #f0f0f0;
}
.card-style {
  border-radius: 12px;
  border-image-slice: 1;
  box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.4);
  transition: all 0.25s linear;
}
.card-style:hover {
  box-shadow: -1px 10px 29px 0px rgba(0, 0, 0, 0.8);
}

.card-text {
  padding: 20px;
  
}
.card-text p{
  color: #333;
}

@media (min-width: 500px) {
  .column {
      flex: 0 0 calc(100%/2 - 40px);
  }
}

@media (min-width: 900px) {
    .column {
      flex: 0 0 calc(100%/4 - 40px);
  }
}
.gtco-testimonials {
  position: relative;
  margin-top: 30px;

  h2 {
    font-size: 30px;
    text-align: center;
    color: #333333;
    margin-bottom: 50px;
  }

  .owl-stage-outer {
    padding: 30px 0;
  }

  .owl-nav {
    display: none;
  }

  .owl-dots {
    text-align: center;

    span {
      position: relative;
      height: 10px;
      width: 10px;
      border-radius: 50%;
      display: block;
      background: #fff;
      border: 2px solid #01b0f8;
      margin: 0 5px;
    }

    .active {
      box-shadow: none;

      span {
        background: #01b0f8;
        box-shadow: none;
        height: 12px;
        width: 12px;
        margin-bottom: -1px;
      }
    }
  }

  .card {
    background: #fff;
    box-shadow: 0 8px 30px -7px #c9dff0;
    margin: 0 20px;
    padding: 0 10px;
    border-radius: 20px;
    border: 0;

    .card-img-top {
      max-width: 100px;
      border-radius: 50%;
      margin: 15px auto 0;
      box-shadow: 0 8px 20px -4px #95abbb;
      width: 100px;
      height: 100px;
    }

    h5 {
      color: #01b0f8;
      font-size: 21px;
      line-height: 1.3;

      span {
        font-size: 18px;
        color: #666666;
      }
    }

    p {
      font-size: 18px;
      color: #555;
      padding-bottom: 15px;
    }
  }

  .active {
    opacity: 0.5;
    transition: all 0.3s;
  }

  .center {
    opacity: 1;

    h5 {
      font-size: 24px;

      span {
        font-size: 20px;
      }
    }

    .card-img-top {
      max-width: 100%;
      height: 120px;
      width: 120px;
    }
  }
}

@media (max-width: 767px) {
  .gtco-testimonials {
    margin-top: 20px;
  }
}

.owl-carousel {
  .owl-nav button {
    &.owl-next, &.owl-prev {
      outline: 0;
    }
  }

  button.owl-dot {
    outline: 0;
  }
}
h1 {
    margin-top: 5rem;
    text-align: center;
}
 

.testimonial-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}
 

.testimonial-container {
    background-color: #ffffff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
 

.testimonial-avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto 20px;
}
 
.testimonial-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
 
.testimonial-text {
    margin-bottom: 20px;
}
 
.testimonial-name {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 5px;
    color: #333333;
}
 
.testimonial-role {
    font-size: 16px;
    color: #666666;
}
 

@media screen and (max-width: 600px) {
    .testimonial-grid {
        grid-template-columns: 1fr;
    }
}
.about3 h1{
  margin-top: 15px;
}
.testimonial-grip{
padding-bottom: 500px;
}
.testimonial-grid p{
  color: #666666;
}
.specialisation{

  background-color:#A7C7E7 ;

}

.booking{	
	background-color:#fff;
	width:100%;
	height:700px;
}
#ft-form {
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15
}
#ft-form *,
#ft-form ::after,
#ft-form ::before {
  box-sizing: border-box
}
#ft-form input,
#ft-form select,
#ft-form textarea {
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15;
  margin: 0
}
#ft-form select {
  text-transform: none
}
#ft-form [type=submit] {
  -webkit-appearance: button
}
#ft-form legend {
  padding: 0
}
#ft-form h2,
#ft-form p {
  margin: 0
}
#ft-form fieldset {
  margin: 0;
  padding: 0
}
#ft-form html {
  font-family: ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  line-height: 1.5
}
#ft-form body {
  font-family: inherit;
  line-height: inherit
}
#ft-form *,
#ft-form ::after,
#ft-form ::before {
  box-sizing: border-box;
  border-width: 0;
  border-style: solid;
  border-color: #e5e7eb
}
#ft-form textarea {
  resize: vertical
}
#ft-form input::-moz-placeholder,
#ft-form textarea::-moz-placeholder {
  color: #9ca3af
}
#ft-form input:-ms-input-placeholder,
#ft-form textarea:-ms-input-placeholder {
  color: #9ca3af
}
#ft-form input::placeholder,
#ft-form textarea::placeholder {
  color: #9ca3af
}
#ft-form h2 {
  font-size: inherit;
  font-weight: inherit
}
#ft-form input,
#ft-form select,
#ft-form textarea {
  padding: 0;
  line-height: inherit;
  color: inherit
}
#ft-form [type=date],
#ft-form [type=email],
#ft-form [type=tel],
#ft-form [type=text],
#ft-form select,
#ft-form textarea {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: #fff;
  border-color: #6b7280;
  border-width: 1px;
  border-radius: 0;
  padding-top: .5rem;
  padding-right: .75rem;
  padding-bottom: .5rem;
  padding-left: .75rem;
  font-size: 1rem;
  line-height: 1.5rem
}
#ft-form [type=date]:focus,
#ft-form [type=email]:focus,
#ft-form [type=tel]:focus,
#ft-form [type=text]:focus,
#ft-form select:focus,
#ft-form textarea:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  box-shadow: 0 0 0 0 #fff, 0 0 0 3px rgba(199,210,254,.5), 0 0 #0000;
  border-color: #2563eb
}
#ft-form input::-moz-placeholder,
#ft-form textarea::-moz-placeholder {
  color: #6b7280;
  opacity: 1
}
#ft-form input:-ms-input-placeholder,
#ft-form textarea:-ms-input-placeholder {
  color: #6b7280;
  opacity: 1
}
#ft-form input::placeholder,
#ft-form textarea::placeholder {
  color: #6b7280;
  opacity: 1
}
#ft-form select {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
  background-position: right .5rem center;
  background-repeat: no-repeat;
  background-size: 1.5em 1.5em;
  padding-right: 2.5rem;
  -webkit-print-color-adjust: exact;
  color-adjust: exact
}
#ft-form [type=checkbox],
#ft-form [type=radio] {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  padding: 0;
  -webkit-print-color-adjust: exact;
  color-adjust: exact;
  display: inline-block;
  vertical-align: middle;
  background-origin: border-box;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  flex-shrink: 0;
  height: 1rem;
  width: 1rem;
  color: #2563eb;
  background-color: #fff;
  border-color: #6b7280;
  border-width: 1px
}
#ft-form [type=checkbox] {
  border-radius: 0
}
#ft-form [type=radio] {
  border-radius: 100%
}
#ft-form [type=checkbox]:focus,
#ft-form [type=radio]:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  box-shadow: 0 0 0 0 #fff, 0 0 0 3px rgba(199,210,254,.5), 0 0 #0000;
}
#ft-form [type=checkbox]:checked,
#ft-form [type=radio]:checked {
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat
}
#ft-form [type=checkbox]:checked {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e")
}
#ft-form [type=radio]:checked {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e")
}
#ft-form [type=checkbox]:checked:focus,
#ft-form [type=checkbox]:checked:hover,
#ft-form [type=radio]:checked:focus,
#ft-form [type=radio]:checked:hover {
  border-color: transparent;
  background-color: currentColor
}
#ft-form [type=checkbox]:indeterminate {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat
}
#ft-form [type=checkbox]:indeterminate:focus,
#ft-form [type=checkbox]:indeterminate:hover {
  border-color: transparent;
  background-color: currentColor
}
#ft-form [type=file] {
  background: unset;
  border-color: inherit;
  border-width: 0;
  border-radius: 0;
  padding: 0;
  font-size: unset;
  line-height: inherit
}
#ft-form [type=file]:focus {
  outline: 1px auto -webkit-focus-ring-color
}
#ft-form fieldset {
  font-size: 100%;
  margin-top: 3rem;
  margin-bottom: 1.5rem
}
#ft-form fieldset:first-child {
  margin-top: 0
}
#ft-form fieldset > * {
  display: block;
  margin-bottom: 1.5rem
}
#ft-form fieldset > :last-child {
  margin-bottom: 0
}
#ft-form fieldset > .two-cols > * {
  display: block;
  margin-bottom: 1.5rem
}
#ft-form fieldset > .two-cols > :last-child {
  margin-bottom: 0
}
@media only screen and (min-width:640px) {
  #ft-form fieldset > .two-cols {
    display: flex;
    align-items: flex-end
  }
  #ft-form fieldset > .two-cols > * {
    display: block;
    margin-right: 1.5rem;
    margin-top: 0;
    margin-bottom: 0;
    flex: 1
  }
  #ft-form fieldset > .two-cols > :last-child {
    margin-right: 0
  }
}
#ft-form fieldset div > label {
  display: inline-flex;
  align-items: flex-start;
  margin-top: .5rem;
  width: 100%
}
#ft-form fieldset div > label:last-child {
  margin: .5rem 0 0 0
}
#ft-form fieldset div.inline {
  padding: .55rem 0 0;
  width: 100%
}
#ft-form fieldset div.inline > label {
  width: auto;
  margin-right: .5rem
}
#ft-form fieldset div.inline > label:last-child {
  margin-right: 0
}
#ft-form fieldset > .two-cols div.inline {
  padding: .55rem 0
}
#ft-form fieldset > legend {
  font-weight: 700;
  font-size: 120%;
  margin-bottom: 1rem
}
#ft-form fieldset > p {
  margin: 0
}
#ft-form [type=file] {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: #fff;
  border-color: #6b7280;
  border-width: 1px;
  border-radius: 0;
  padding-top: .5rem;
  padding-right: .75rem;
  padding-bottom: .5rem;
  padding-left: .75rem;
  font-size: 1rem;
  line-height: 1.5rem
}
#ft-form [type=file]:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  box-shadow: 0 0 0 0 #fff, 0 0 0 3px rgba(199,210,254,.5), 0 0 #0000;
  border-color: #2563eb
}
#ft-form [multiple],
#ft-form [type=date],
#ft-form [type=datetime-local],
#ft-form [type=email],
#ft-form [type=file],
#ft-form [type=month],
#ft-form [type=number],
#ft-form [type=password],
#ft-form [type=search],
#ft-form [type=tel],
#ft-form [type=text],
#ft-form [type=time],
#ft-form [type=url],
#ft-form [type=week],
#ft-form select,
#ft-form textarea {
  border-radius: .375rem;
  margin-top: .25rem;
  box-shadow: 0 0 #0000,0 0 #0000,0 1px 2px 0 rgba(0,0,0,.05);
  border-color: #bbb;
  width: 100%
}
#ft-form [multiple] select,
#ft-form [type=date] select,
#ft-form [type=datetime-local] select,
#ft-form [type=email] select,
#ft-form [type=file] select,
#ft-form [type=month] select,
#ft-form [type=number] select,
#ft-form [type=password] select,
#ft-form [type=search] select,
#ft-form [type=tel] select,
#ft-form [type=text] select,
#ft-form [type=time] select,
#ft-form [type=url] select,
#ft-form [type=week] select,
#ft-form select select,
#ft-form textarea select {
  padding-right: 2.5rem
}
#ft-form [multiple]:focus,
#ft-form [type=date]:focus,
#ft-form [type=datetime-local]:focus,
#ft-form [type=email]:focus,
#ft-form [type=file]:focus,
#ft-form [type=month]:focus,
#ft-form [type=number]:focus,
#ft-form [type=password]:focus,
#ft-form [type=search]:focus,
#ft-form [type=tel]:focus,
#ft-form [type=text]:focus,
#ft-form [type=time]:focus,
#ft-form [type=url]:focus,
#ft-form [type=week]:focus,
#ft-form select:focus,
#ft-form textarea:focus {
  border-color: #bbb;
  box-shadow: 0 0 0 0 #fff,0 0 0 3px rgba(199,210,254,.5),0 0 #0000
}
#ft-form [type=checkbox],
#ft-form [type=radio] {
  color: #4f46e5;
  box-shadow: none;
  border-radius: .25rem;
  border-color: #bbb;
  margin-right: .5rem
}
#ft-form [type=checkbox]:focus,
#ft-form [type=radio]:focus {
  border-color: #bbb;
  box-shadow: 0 0 0 0 #fff,0 0 0 3px rgba(199,210,254,.5),0 0 #0000
}
#ft-form [type=radio] {
  border-radius: 100%
}
#ft-form .btns {
  text-align: right;
  margin-top: 3rem
}
#ft-form .btns > input[type=button],
#ft-form .btns > input[type=reset],
#ft-form .btns > input[type=submit] {
  display: inline-block;
  box-shadow: 0 0 #0000,0 0 #0000,0 1px 2px 0 rgba(0,0,0,.05);
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  padding-top: .6rem;
  padding-bottom: .6rem;
  line-height: 1.25rem;
  border-width: 1px;
  border-radius: .375rem;
  border-color: #bbb;
  background-color: #fff;
  cursor: pointer;
  margin-left: .5rem;
  font-weight: 700
}
#ft-form .btns > input[type=button]:focus,
#ft-form .btns > input[type=reset]:focus,
#ft-form .btns > input[type=submit]:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  border-color: #bbb;
  box-shadow: 0 0 0 2px #fff,0 0 0 4px rgba(199,210,254,.5),0 0 #0000
}
#ft-form .btns > input[type=submit] {
  background-color: #f3f4f5;
  transition: background-color .1s
}
#ft-form .btns > input[type=submit]:hover {
  background-color: #f8f9fa
}
.about5
{
  background-color:#fff;
  height:10vh;
}



</style>
  <title>Hospital management system</title>
</head>

<body>
 
  <nav class="navbar fixed-top navbar-expand-lg " data-bs-theme="dark">
    <a class="navbar-brand" href="#">HealthCare</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="homepage.html">Home </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="signup1.php">Signup</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="signup.php">Login</a>
        </li>
		<li class="nav-item ">
          <a class="nav-link" href="appointment.php">Appointment</a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" >
    
      <div class="carousel-item active">
        <img class="d-block w-100" src="slider/image1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="slider/image 2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="slider/image 3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
   </div>

  
  <div class="about">
    <section class="articles">
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="slider/people-first-language.jpg" alt="" />
          </figure>
          <div class="article-body">
            <h2>People first</h2>
            <p>
              Our foremost concern is to ensure that your health receives special attention and that you are given best possible care.
            </p>
            
          </div>
        </div>
      </article>
      <article>
    
        <div class="article-wrapper">
          <figure>
          <img src="slider/Tine-Website-Photos-Articles-8.webp"  alt="" />
          </figure>
          <div class="article-body">
            <h2>Quality care</h2>
            <p>
              State of the art operation theatres, equipped with advanced instruments for high-end surgeries.
          </p>
          </div>
        </div>
      </article>
      <article>
    
        <div class="article-wrapper">
          <figure>
            <img src="slider/istockphoto-1473559425-612x612.jpg" alt="" />
          </figure>
          <div class="article-body">
            <h2>Great service</h2>
            <p>
              24x7 Emergency Services. We have a fleet of ambulance to handle every emergency situation.
            </p>
            
          </div>
        </div>
      </article>
    </section>
</div>
<div class="about01">
<div class="specialisation">
  <div class="row">
    <div class="col-lg-3">
      
      <div class="card" >
        <img src="slider/heart-2020_ff296de6c546eaae892f6b62674efeb6.png" alt="">
        <h4>
          Cardiac Sciences
        </h4>
        <p>
          Coronary Artery Bypass Surgery (CABG),Valvular Heart Surgery,Aortic Aneurysm Surgery
          ,Heart Failure surgery,etc        </p>
      </div>
  </div>
  <div class="col-lg-3">
      
    <div class="card" >
      <img src="slider/brain-2020_701551e73104df1e27f325434f2ed194.png" alt="">
      <h4>
        Neurosciences
      </h4>
      <p>
        Electroencephalography (EEG),Electromyography (EMG),Evoked Responses (VEP, BEAR),Nerve Conduction Studies (NCV)

      </p>
    </div>
</div>
<div class="col-lg-3">
      
  <div class="card" >
    <img src="slider/kidney-2020_2e2336c28b5a1e3ed4c55e73243370db.png" alt="">
    <h4>
      Renal Diseases
    </h4>
    <p>
      Hemodialysis (HD),Critical Care Nephrology,Diabetic kidney patient,Pediatric Urology,Treatment of Male Infertility
    </p>
  </div>
</div>
<div class="col-lg-3">
      
  <div class="card" >
    <img src="slider/stomach-2020_0a1548258ae5c52573568600d01ef56f.png" alt="">
    <h4>
      GI Surgery & Bariatrics
    </h4>
    <p>
      Hepato-pancreatico-biliary Surgery,Gastrointestinal & Colorectal disorders,incisional hernia,Surgery for Acute and Chronic Pancreatitis
    </p>
  </div>
</div>
<div class="col-lg-3">
      
  <div class="card" >
    <img src="slider/joint-2020_0492f3ef042bd84a8e8833b3fbbf5f68.png" alt="">
    <h4>
      Orthopaedics & Joint Replacement Surgery
    </h4>
    <p>
      Total Knee Replacement / Knee Resurfacing,Unicondylar Knee Replacement/Bone Preserving Surgery,
      Revision Knee Replacement,Minimal access surgery
    </p>
  </div>
</div>
<div class="col-lg-3">
      
  <div class="card" >
    <img src="slider/face-2020_391337311a0be844432ad17e4ae0f13f.png" alt="">
    <h4>
      Cosmetic & Plastic Surgery
    </h4>
    <p>
      Hair Transplant/Hair Loss Treatment,Liposuction/Tummy Tuck,Gynaecomastia,Baggy Eyelid surgery,Burns injuries/Deformities,Baggy Eyelid surgery,Breast Implan
    </p>
  </div>
</div>
<div class="col-lg-3">      
  <div class="card" >
    <img src="slider/baby-2020_5fa90371368754f8cddb86db4819329f.png" alt="">
    <h4>
      Pediatrics & Neonatology
    </h4>
    <p>
      tracheo-esophageal fistula,Intestinal atresia,Urology surgeries- Hydronephrosis, VVR,Appendectomy,Herniotomy,Care Of Asthmatic Patients
    </p>
  </div>
</div>
<div class="col-lg-3">
      
  <div class="card" >
    <img src="slider/anaesthesia-2020_423d54a310b1f1244282ec26cdffefb4.png" alt="">
    <h4>
      Anesthesiology & Critical care
    </h4>
    <p>
      Medical Intensive Care Unit, Coronary Care Unit, Cardiothoracic, and Vascular Surgery Intensive Care Unit, Neonatal Intensive Care Unit, Pediatric Intensive Care Unit and High Dependency Unit
    </p>
  </div>
</div>
</div>
</div>
</div>
<div class="about5">

</div>

 
  <div class="about3">
    <section>
      <div class="column card-style">
        <figure>
          <img src="slider/bodytext-BI-1.webp" alt="cactus stock image">
        </figure>
        <div class="card-text">
          <h1>CORPORATE SERVICES</h1>
          <p class="ellipsis">
          We have decidicated corporate desk to facilitate seamless cashless services under insurance/TPA;
          private/government(PSU)
          corporates and ECHS department.
          </p>
        </div>
      </div>
      <div class="column card-style">
        <figure>
          <img src="slider/hospital-ward-hospital-medical-room-operation-accommodation.jpg" alt="cactus stock image">
        </figure>
        <div class="card-text">
          <h1>ACCOMMODATION</h1>
         
          <p class="ellipsis">
            We understand the challenges of accommodating family member who want to be with the patients during their stay.
          </p>
        </div>
      </div>
      <div class="column card-style">
        <figure>
          <img src="slider/Obstetrics & Gynaecology.jpg" alt="cactus stock image">
        </figure>
        <div class="card-text">
          <h1>FACILITIES</h1>
          
          <p class="ellipsis">
            Our foremost concern is to ensure that your health recieves special attention and that are given best possible care.
          </p>
        </div>
  
      </div>
      <div class="column card-style">
        <figure>
          <img src="slider/doctor-doing-a-medical-exam-1296x728-header.webp" alt="cactus stock image">
        </figure>
        <div class="card-text">
          <h1>HEALTH PACKAGES </h1>
          <p class="ellipsis">
            Annual health check-ips is the best way to ensure a longer and healthier life as health problems can be managed more effectively if detected earlier.
          </p>
        </div>
      </div>
    </section>
   
    </div>
    <h1 class="heading1">Testimonials</h1>
    <div class="testimonial-grid">
 

        <div class="testimonial-container">
            <div class="testimonial-avatar">
                <img src="slider/download.jpg"
 
                    alt="User Avatar">
            </div>
            <p class="testimonial-name">ryan adurn</p>
            <div class="testimonial-text">
                
                
<p>
  "I am very happy with all staff of Dr Aparna Sharma mam she treat us as a family. Heartily thank for all the staff of NICU and their services. Dr Aparna Sharma I am deeply thanks for your kindness with my family if ever you come in Himachal Pradesh Dharamshala stay with us our family. Thanks to all staff for care like a family of my wife and baby. Thank you so much."
</p>
            </div>
        </div>
       
        <div class="testimonial-container">
            <div class="testimonial-avatar">
                <img src="slider/images.jpg"
                    alt="User Avatar">
            </div>
            <div class="testimonial-text">
                <p class="testimonial-name">Chris Doe</p>
               
                <p>All the doctors are very professional and polite in nature. All the Alchemist team know how to treat the patient. The nursing staff is very co-operative and friendly in nature. Overall good experience. Thank you all the doctors, nursing staff, helpers and all Alchemist hospital team.</p>
            </div>
        </div>
       
        <div class="testimonial-container">
            <div class="testimonial-avatar">
                <img src="slider/photo-1506794778202-cad84cf45f1d.avif"
                    alt="User Avatar">
            </div>
            <div class="testimonial-text">
                <p class="testimonial-name">John Doe</p>
               
<p>"The results we've achieved using this platform's marketing services are exceptional. 
       Our campaigns are more effective, and the team's insights are invaluable."</p>
            </div>
        </div>
    </div>
  
    
  
  





    <footer class="footer">
        <div class="container">
            <div class="footer-column">
                
                <p class="support-text">SUPPORT TEAM:</p>
                <a href="mailto:support@docpulse.com">support@healthcare.com</a>
                <p>08046837034</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="footer-column">
                <h3>QUICK LINKS</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Product Videos</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>PRODUCTS</h3>
                <ul>
                    <li><a href="#">OP Billing</a></li>
                    <li><a href="#">Lab</a></li>
                    <li><a href="#">Pharmacy</a></li>
                    <li><a href="#">Electronic Health Record</a></li>
                    <li><a href="#">IVR Appointment Booking Software</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>SECURITY</h3>
                <ul>
                    <li><a href="#">HIPAA Compliant Data Centers</a></li>
                    <li><a href="#">Multi Geography Backup</a></li>
                    <li><a href="#">SHA-256 Encryption</a></li>
                    <li><a href="#">Google Cloud Platform</a></li>
                </ul>
            </div>
        </div>
    </footer>




<script>
  (function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 3,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();

</script>

 <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>