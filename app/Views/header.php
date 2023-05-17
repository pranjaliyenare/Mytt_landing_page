<html><head>
    <style>
      @media(max-wdith: 767px){
        .custom-xs-d-flex {
	    display: flex;
	    }
      }
.accordion {
  /* background-color: #eee;
  color: #444; */
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}

.responsive {
  width: 100%;
  height: auto;
}
      </style>
      <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.tailwindcss.com/'></script>
    <!-- TITLE OF SITE -->
    <title>MYTT - Landing Page</title>

    <!-- for title img -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url(); ?>/public/favicon.png"/>
    <link type="text/css" rel="stylesheet" href="magicscroll/magicscroll.css"/>
    <script type="text/javascript" src="magicscroll/magicscroll.js"></script>
    </head><body>
        <div class="bg-white">
    
    <div class="box-border relative overflow-hidden leading-7 text-gray-900 border-0 border-gray-200 border-solid">
      <div class="relative z-5 mx-auto max-w-7xl">
        <div href="https://mytt.in/" class="flex flex-col items-center justify-center w-full px-8 py-20 space-y-6 text-center border-solid md:w-2/3 lg:w-1/2 md:space-y-10 md:items-start md:py-48 md:text-left lg:py-40 xl:py-48 lg:pl-12 lg:pr-16 xl:pl-16 xl:pr-24" style="padding-left: 40px;">
                  <img src="<?php echo base_url();?>/public/logo.png" alt="Urja logo" />
                  <h1 class="w-full text-4xl font-extrabold leading-tight tracking-tight text-left text-black md:text-5xl lg:text-6xl primary_text editable" data-content="website-headlines">Invest Smartly with MyThink Tank and Get Maximum Returns!</h1>
          <p class="text-xl leading-tight text-left text-gray-700 border-0 border-gray-200 w md:text-2xl secondary_text editable" data-content="website-subheadlines">MyThink Tank is an internationally accredited company that offers investments plans with best returns monthly and yearly.</p>
          <form class="flex items-center w-full">
            <a type="submit" href="https://crm.mytt.in/register" target="_blank" class="box-border inline-flex items-center justify-center w-2/5 py-3 font-medium text-lg leading-none text-center text-white no-underline bg-blue-600 border-2 border-blue-600 border-solid rounded cursor-pointer hover:bg-blue-700 hover:border-blue-700 hover:text-white btn-editable editable" target="_blank">Get Started</a>
          </form>
        </div>
      </div>
      <div class="absolute top-0 right-0 hidden w-1/3 h-full md:block lg:w-1/2 responsive" style="background-image: url(<?php echo base_url(); ?>/public/IMG.jpg);background-repeat: no-repeat;height: 80%;padding:200px;">
        <!-- <img class="object-cover w-full h-full img-editable" src="https://images.unsplash.com/photo-1559067096-49ebca3406aa"> -->
        <iframe  style="height: 500px; width:400px; " src="https://erp.mytt.in/forms/wtl/ce7868b77f4f470fef6004a0ad602fde" frameborder="0" sandbox="allow-top-navigation allow-scripts allow-forms allow-same-origin" allowfullscreen></iframe>
      </div>
		
        </div>
      </div>
    <div class="bg-white" style="padding-left: 30px;">
	<div class="pt-12 pb-12 max-w-7xl mx-auto">
	   <div class="container">
		  <div class="flex flex-wrap justify-between items-center -mx-4">
			 <div class="w-full lg:w-6/12 px-4">
				<div class="flex items-center -mx-3 sm:-mx-4">
				   <div class="w-full xl:w-1/2 px-3 sm:px-4">
					  <div class="py-3 sm:py-4">
					  	<div class="relative">
						 <img src="<?php echo base_url(); ?>/public/images/first.jpg" alt="" class="rounded-2xl w-full img-editable">
						 <p class="photo-credit absolute bottom-3 text-white text-xs right-4 tracking-tight secondary_text font-medium"></p></div>
					  </div>
					  <div class="py-3 sm:py-4">
					  	<div class="relative">
						 	<img src="<?php echo base_url(); ?>/public/images/second.jpg" alt="" class="rounded-2xl w-full img-editable">
						 <p class="photo-credit absolute bottom-3 text-white text-xs right-4 tracking-tight secondary_text font-medium"></p></div>
					  </div>
				   </div>
				   <div class="w-full xl:w-1/2 px-3 sm:px-4">
					  <div class="my-4 z-10">
					  	<div class="relative">
						 <img src="<?php echo base_url(); ?>/public/images/third.jpg" alt="" class="rounded-2xl w-full img-editable">
						<p class="photo-credit absolute bottom-3 text-white text-xs right-4 tracking-tight secondary_text font-medium"></p></div>
					  </div>
				   </div>
				</div>
			 </div>
			 <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
				<div class="mt-10 lg:mt-0">
				   <span class="font-semibold text-base text-blue-600 mb-2 block uppercase secondary_text editable">About Us</span>
				   <h2 class="font-bold text-3xl sm:text-4xl text-dark mb-8 primary_text editable" data-content="website-headlines">Invest Your Money, Reap The Rewards With MyThink Tank.</h2>
				   <p class="text-base text-gray-600 mb-8 secondary_text editable" data-content="about-us">MyThink Tank is a company that offers investment plans with great returns. We have been in business for over 10 years and have helped many people grow their money. We offer a variety of investment plans, so you can choose the one that best suits your needs. We are always here to help you grow your money and reach your financial goals.</p>
				   <a href="https://crm.mytt.in/register" target="_blank" class="py-3 px-10 inline-flex items-center justify-center text-center text-white text-base bg-blue-600 hover:bg-blue-700 hover:no-underline font-medium rounded-lg btn-editable editable" target="_blank">Get Started</a>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>

<div class="bg-white">
	<div class="px-4 pb-16 pt-14 mx-auto sm:max-w-xl md:max-w-full lg:max-w-7xl md:px-24 lg:px-8">
          <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <p class="inline-block px-3 py-px mb-2 text-base font-semibold tracking-wider w-full text-blue-600 uppercase secondary_text editable">About MyThink Tank</p>
            <h2 class="max-w-lg mb-5 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto primary_text editable" data-content="website-headlines">Invest Wisely and Secure Your Financial Future with MyThink Tank</h2>
            <p class="text-base text-gray-700 md:text-lg secondary_text editable" data-content="product-descriptions">MyThink Tank is a fund management company that offers different investment plans in order to best suit our customers' needs. We offer monthly and yearly term investments where we provide the best return possible.</p>
          </div>
          <div class="grid max-w-screen-lg gap-8 row-gap-5 mb-8 sm:grid-cols-2 lg:grid-cols-4 sm:mx-auto">
			  <div class="relative"><img class="object-cover w-full h-56 rounded shadow-lg img-editable" src="<?php echo base_url(); ?>/public/images/1.jpg" alt=""></div>
			  <div class="relative"><img class="object-cover w-full h-56 rounded shadow-lg img-editable" src="<?php echo base_url(); ?>/public/images/2.jpg" alt=""></div>
			  <div class="relative"><img class="object-cover w-full h-56 rounded shadow-lg img-editable" src="<?php echo base_url(); ?>/public/images/3.jpg" alt=""></div>
			  <div class="relative"><img class="object-cover w-full h-56 rounded shadow-lg img-editable" src="<?php echo base_url(); ?>/public/images/4.jpg" alt=""></div>
          </div>
          <div class="flex items-center sm:justify-center">
			  <a href="https://crm.mytt.in/register" target="_blank"  class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-blue-600 hover:bg-blue-700 focus:shadow-outline focus:outline-none secondary_text btn-editable editable" target="_blank">Sign up</a>
			  </div>
	</div>
</div>

    <div class="bg-white py-10">
      <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h2 class="text-3xl font-extrabold text-gray-900 sm:text-5xl sm:leading-none sm:tracking-tight lg:text-5xl primary_text editable">Choose Your Plan</h2>
          <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-500 secondary_text editable" data-content="website-subheadlines">A world-class team of financial experts, trader and analyst.</p>
        </div>
        <div class="col-md-12 grid gap-20 lg:gap-8 lg:grid-cols-3">
          <div class="flex flex-col items-center space-y-6">
          <img src="<?php echo base_url(); ?>/public/images/plan1.png"  style="width:80%"/>
          </div>
          <div class="flex flex-col items-center space-y-6">
          <img src="<?php echo base_url(); ?>/public/images/plan2.png" style="width:80%"/>
          </div>
          <div class="flex flex-col items-center space-y-6">
          <img src="<?php echo base_url(); ?>/public/images/plan3.png" style="width:80%"/>
          </div>
          <div class="flex flex-col items-center space-y-6">
          <img src="<?php echo base_url(); ?>/public/images/plan4.png" style="width:80%"/>
          </div>
          <div class="flex flex-col items-center space-y-6">
          <img src="<?php echo base_url(); ?>/public/images/plan5.png" style="width:80%"/>
          </div>
          <div class="flex flex-col items-center space-y-6">
          <img src="<?php echo base_url(); ?>/public/images/plan6.png" style="width:80%"/>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-white">
   <div class="px-4 py-16 mx-auto sm:max-w-7xl md:max-w-7xl lg:max-w-7xl md:px-24 lg:px-8 lg:py-20">
	  <div class="grid gap-6 row-gap-10 lg:grid-cols-2" data-content="how-it-works">
		<div class="lg:py-6 lg:pr-16">
		  <h2 class="mb-8 font-bold text-black text-4xl primary_text editable">How it works</h2>
			<div class="flex" data-subcontent="step_1">
			<div class="flex flex-col items-center mr-4">
			  <div>
				<div class="flex items-center justify-center w-10 h-10 border rounded-full">
				  <svg class="w-4 text-blue-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
					<line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
					<polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
				  </svg>
				</div>
			  </div>
			  <div class="w-px h-full bg-gray-300"></div>
			</div>
			<div class="pt-1 pb-8 w-full">
			  <p class="mb-2 text-xl text-gray-900 font-bold primary_text editable" data-subcontent="step-title">Register</p>
			  <p class="text-base text-gray-600 secondary_text editable" data-subcontent="step-content">Register and Complete your KYC.</p>
			</div>
		  </div>
		  <div class="flex" data-subcontent="step_2">
			<div class="flex flex-col items-center mr-4">
			  <div>
				<div class="flex items-center justify-center w-10 h-10 border rounded-full">
				  <svg class="w-4 text-blue-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
					<line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
					<polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
				  </svg>
				</div>
			  </div>
			  <div class="w-px h-full bg-gray-300"></div>
			</div>
			<div class="pt-1 pb-8 w-full">
			  <p class="mb-2 text-xl text-gray-900 font-bold primary_text editable" data-subcontent="step-title">Choose your investment plan</p>
			  <p class="text-base text-gray-600 secondary_text editable" data-subcontent="step-content">We have multiple Investment Plans to choose from</p>
			</div>
		  </div>
		  <div class="flex" data-subcontent="step_3">
			<div class="flex flex-col items-center mr-4">
			  <div>
				<div class="flex items-center justify-center w-10 h-10 border rounded-full">
				  <svg class="w-6 text-blue-600" stroke="currentColor" viewBox="0 0 24 24">
					<polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
				  </svg>
				</div>
			  </div>

			</div>
			<div class="pt-1 pb-0 w-full">
			  <p class="mb-2 text-xl text-gray-900 font-bold primary_text editable" data-subcontent="step-title">Review your returns</p>
			  <p class="text-base text-gray-600 secondary_text editable" data-subcontent="step-content">Our Monthly Returns starts from 3%</p>
			</div>
		  </div>
		</div>
		<div class="relative">
		  <img class="inset-0 object-cover w-full rounded shadow-lg h-96 lg:absolute lg:h-full img-editable" src="<?php echo base_url(); ?>/public/2.jpg" alt="">
		<p class="photo-credit absolute bottom-3 text-white text-xs right-4 tracking-tight secondary_text font-medium"></p></div>
	  </div>
	</div>
</div><div class="flex items-center justify-center py-16 bg-white min-w-screen">
    <div class="max-w-6xl px-12 mx-auto md:px-16 xl:px-10">
        <div class="flex flex-col items-center lg:flex-row">
            <div class="flex flex-col items-start justify-center w-full h-full pr-8 mb-10 lg:mb-0 lg:w-1/2" style="padding-left: 30px;">
                <p class="mb-2 text-base font-medium text-blue-600 uppercase accent_text editable">Investor love MyThink Tank</p>
                <h2 class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl primary_text editable">Testimonials</h2>
                <p class="my-6 text-lg text-gray-600 secondary_text editable">Don't just take our word for it, read from our extensive list of case studies and customer testimonials.</p>
                <a href="https://crm.mytt.in/register"target="_blank"  class="flex items-center justify-center px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-blue-600 border border-transparent rounded-md shadow hover:bg-blue-700 focus:outline-none btn-editable editable">Get Started</a>
            </div>
            <div class="w-full lg:w-1/2">
                <blockquote class="flex items-center justify-between w-full col-span-1 p-6 bg-white rounded-lg shadow">
                    <div class="flex flex-col pr-8">
                        <div class="relative pl-12">
                            <svg class="absolute left-0 w-10 h-10 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                            </svg>
                            <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base secondary_text editable" data-content="testimonials">"I was not sure about this company, but I gave it a try and now I'm very happy with the results. The members of MyThink Tank are really friendly and they really care about our investment."</p>
                        </div>

                        <h3 class="pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base lg:text-sm lg:text-base secondary_text">
                            <span class="editable">Kishor Thokde</span>
                            <span class="mt-1 text-sm leading-5 text-gray-500 truncate secondary_text editable">- Happy Invester</span>
                        </h3>
                        
                    </div>
                    
                </blockquote>
                <blockquote class="flex items-center justify-between w-full col-span-1 p-6 mt-4 bg-white rounded-lg shadow">
                    <div class="flex flex-col pr-10">
                        <div class="relative pl-12">
                            <svg class="absolute left-0 w-10 h-10 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                            </svg>
                            <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base secondary_text editable" data-content="testimonials">"I have been investing with mythinktank.com for a while, and I find their service to be nothing less than excellent. They provide me with excellent returns, I can't think of any other investment provider that has given me this kind of service."</p>
                        </div>
                        <h3 class="pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base lg:text-sm lg:text-base secondary_text">
                            <span class="editable">Rajesh Nile</span>
                            <span class="mt-1 text-sm leading-5 text-gray-500 truncate secondary_text editable">- Happy Invester</span>
                        </h3>
                        <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                    </div>
                    
                </blockquote>
                <blockquote class="flex items-center justify-between w-full col-span-1 p-6 mt-4 bg-white rounded-lg shadow">
                    <div class="flex flex-col pr-10">
                        <div class="relative pl-12">
                            <svg class="absolute left-0 w-10 h-10 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                            </svg>
                            <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base secondary_text editable" data-content="testimonials">"My Think Tank is a great investment opportunity for me. I've made double the money that I invested and now I have an income of around $5,000 each month."</p>
                        </div>

                        <h3 class="pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base lg:text-sm lg:text-base secondary_text">
                            <span class="editable">Vikas Mohite</span>
                            <span class="mt-1 text-sm leading-5 text-gray-500 truncate secondary_text editable">- Happy Invester </span>
                        </h3>
                        <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                    </div>
                    
                </blockquote>
            </div>
        </div>
    </div>
</div><div class="py-12 bg-white sm:py-16 md:py-20 lg:py-24 pb-28">
    <div class="max-w-6xl px-8 mx-auto lg:px-16">
        <h2 class="mb-2 text-2xl font-bold text-center text-gray-900 md:text-3xl lg:text-4xl primary_text editable">Frequently Asked Questions</h2>
        <div class="relative flex flex-col mt-8 mt-16 lg:flex-row">
            <!-- Left side of FAQs -->
            <div class="relative w-full space-y-3 lg:space-y-5 lg:w-1/2 lg:pr-4">
                <!-- Question 1 -->
                <button class="text-gray-700 text-lg font-medium secondary_text w-full pr-2 editable accordion accordion  px-6 rounded-lg" style="background-color: #afc9ef63;">How does MyThink Tank work?</button>
                  <!-- <img src="<//?php echo base_url(); ?>/public/images/arrow.png"/> -->
                  <div class="panel rounded-lg py-2 px-6" style="background-color:rgb(225 235 249 / 50%);">
                    <p>MyThink Tank works by analyzing different investments opportunities and helping you make the most out of your money. Our team of experienced professionals will give you the best advice, tailored to your individual needs. From evaluating stocks and funds to managing your portfolio, we will make sure you get the most from your money. Plus, with our convenient online platform, it's easier than ever to stay on top of where you're investing and monitor your progress.</p>
                  </div>
                
                <!-- Question 2 -->
                <button class="text-gray-700 text-lg font-medium secondary_text w-full pr-2 editable accordion accordion  px-6 rounded-lg" style="background-color: #afc9ef63;">How much returns I will get monthly, yearly?</button>
                  <div class="panel rounded-lg py-2 px-6" style="background-color:rgb(225 235 249 / 50%);">
                    <p>With MyThink Tank, you can get up to 5% returns per month. Our plans are designed to give you the best returns possible. Additionally, with our yearly plans, you can earn up to 12% returns in a year. We understand that every person has a different risk appetite and goals, so we have designed multiple plans to suit everyone's needs.</p>
                </div>
                
                <!-- Question 3 -->
                <button class="text-gray-700 text-lg font-medium secondary_text w-full pr-2 editable accordion accordion px-6 rounded-lg" style="background-color: #afc9ef63;">Can I lose money with MyThink Tank?</button>
                  <div class="panel rounded-lg py-2 px-6" style="background-color:rgb(225 235 249 / 50%);">
                    <p>There is always risk involved in any kind of investment, and MyThink Tank is no exception. We strive to provide the best plans and returns, but it is important to remember that investments can go up or down, so there is always a risk of capital loss. Be sure to do your own research before investing and remember the golden rule: never invest more than you can afford to lose.</p>
                </div>
                
            </div>
            <!-- Right side of FAQs -->
            <div class="relative w-full space-y-3 lg:mt-0 lg:space-y-5 lg:w-1/2 lg:pl-4">
                <!-- Question 1 -->
                <button class="text-gray-700 text-lg font-medium secondary_text w-full pr-2 editable accordion accordion  px-6 rounded-lg" style="background-color: #afc9ef63;">What is the minimum amount I can invest?</button>
                  <div class="panel rounded-lg py-2 px-6" style="background-color:rgb(225 235 249 / 50%);">
                    <p>With  MyThink  Tank , you can start  investing with  as little as  Rs. 10000! We offer a variety of plans and investment strategies so you can find the one that best fits your goals. Investing has never been this easy – choose from our pre-made plans or customize one to fit your needs.</p>
                </div> 
                
                <!-- Question 2 -->
                <button class="text-gray-700 text-lg font-medium secondary_text w-full pr-2 editable accordion accordion  px-6 rounded-lg" style="background-color: #afc9ef63;">What is the risk reward of investing with MyThink Tank?</button>
                  <div class="panel rounded-lg py-2 px-6" style="background-color:rgb(225 235 249 / 50%);">
                    <p>At MyThink Tank, we strive to provide reliable and beneficial investments plans with an attractive risk-reward ratio. Our investment plans are built to help you achieve your financial goals without taking too much risks. We offer multiple options for different investor profiles, where you can expect attractive returns on your investments while minimizing the associated risks.</p>
                </div>

                
                <!-- Question 3 -->
                <!-- <button class="text-gray-700 text-lg font-medium secondary_text w-full pr-2 editable accordion accordion  px-6 rounded-lg" style="background-color: #afc9ef63;">What is the risk reward of investing with MyThink Tank?</button>
                  <div class="panel rounded-lg py-2 px-6" style="background-color:rgb(225 235 249 / 50%);">
                    <p>With MyThink Tank, you can be confident that your investments are secure and managed by experienced professionals. We offer multiple investment plans with both short-term and long-term strategies to help you maximize returns. Our tailored plans also include risk management strategies so that you can invest securely and confidently.</p>
                </div> -->
                
            </div>
        </div>
    </div>
</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

               