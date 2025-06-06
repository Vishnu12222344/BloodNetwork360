<!DOCTYPE html>
<html>
  <head>
    <title>Online Blood Bank</title>
    <meta charset="UTF-8" />
    
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    body {
        font-family: Arial, sans-serif;
        padding: 20px;
    }
    .container {
        background-color: white;
        max-width: 600px;
        margin: auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
    }
    input, select, textarea {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    .button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background-color: #45a049;
    }
.container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-start;
    max-width: 1200px; /* Adjust as needed */
    margin: 0 auto;
    padding: 20px;
}

.text-section {
    flex: 1; /* Allows text section to take available space */
    padding-right: 20px; /* Space between text and images */
}

.image-section {
    flex: 0 0 300px; /* Fixed width for image section */
    display: flex;
    flex-direction: column;
    align-items: center;
}

.image-section img {
    max-width: 100%; /* Responsive image */
    margin-bottom: 10px; /* Space between images */
}

h1, h2 {
    color: #2c3e50; /* Heading color */
}

p, li {
    color: #34495e; /* Text color */
    line-height: 1.6; /* Improved readability */
}

ul {
    list-style-type: disc;
    padding-left: 20px; /* Indentation for list */
}
@keyframes glow {
    0% { text-shadow: 0 0 10px red; }
    20% { text-shadow: 0 0 10px orange; }
    40% { text-shadow: 0 0 10px yellow; }
    60% { text-shadow: 0 0 10px green; }
    80% { text-shadow: 0 0 10px blue; }
    100% { text-shadow: 0 0 10px violet; }
}

@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}


.glowing-title {
    display: flex;
    justify-content: center;
    margin: 0;
}

.glowing-title span {
    font-size: rem;
    display: inline-block;
    animation: glow 2s infinite alternate, bounce 1.5s infinite;
}
.glowing-title span:nth-child(1) { color: red; }
.glowing-title span:nth-child(2) { color: red; }
.glowing-title span:nth-child(3) { color: red; }
.glowing-title span:nth-child(4) { color: red; }
.glowing-title span:nth-child(5) { color: red; }
.glowing-title span:nth-child(6) { color: white; }
.glowing-title span:nth-child(7) { color: white; }
.glowing-title span:nth-child(8) { color: white; }
.glowing-title span:nth-child(9) { color: white; }
.glowing-title span:nth-child(10) { color: white; }
.glowing-title span:nth-child(11) { color: white; }
.glowing-title span:nth-child(12) { color: white; }
.glowing-title span:nth-child(13) { color: red; }
.glowing-title span:nth-child(14) { color: red; }
.glowing-title span:nth-child(15) { color: red; }



</style>
  <body>
    <div>
        <header>
            <div id='logo1'><img src="images/image1.jpg" alt="Logo" class="logo"></div>
            <h1 class="glowing-title">
            <span>B</span><span>L</span><span>O</span><span>O</span><span>D</span><span>N</span><span>E</span><span>T</span><span>W</span><span>O</span><span>R</span><span>K</span><span>3</span><span>6</span><span>0</span>
        </h1>
        </header>
        </div><br>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="./bloodbank/registrationform.php">Donate Blood</a></li>
                <li><a href="appointment.php">Appointment</a></li>
                <li><a href="#support">Support Us</a></li>
                <li><a href="Aboutus.php">About Us</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
        </nav><br>
    
    <!-- Web3Forms Popup Widget Starts here -->
    <div  id="web3forms__widget" x-data="{ open: false }""> 
   
      <div
        id="w3f__widget--content"
        x-show="open"
        x-transition:enter-start="opacity-0 translate-y-5"
        x-transition:enter="transition duration-200 transform ease"
        x-transition:leave="transition duration-200 transform ease"
        x-transition:leave-end="opacity-0 translate-y-5"
        @click.away="open = false"
        class="fixed flex flex-col z-50 bottom-[100px] top-0 right-0 h-auto left-0 sm:top-auto sm:right-5 sm:left-auto h-[calc(100%-95px)] w-full sm:w-[350px] overflow-auto min-h-[250px] sm:h-[600px] border border-gray-300 bg-white shadow-2xl rounded-md"
      >
      <div class="flex p-5 flex-col justify-center items-center h-32 bg-indigo-600">
        <h3 class="text-lg text-white">How can we help?</h3>
        <p class="text-white opacity-50">We usually respond in a few hours</p>
      </div>
       <div class="bg-gray-50 flex-grow p-6"> 
         
          <form
          action="https://api.web3forms.com/submit"
          method="POST"
          id="form"
          class="needs-validation"
          novalidate
        >
          <input type="hidden" name="access_key" value="6eb4915c-953a-44ff-bd18-cd3c07f39feb" />
          <input
            type="hidden"
            name="subject"
            value="New Submission from Web3Forms"
          />
          <input
            type="checkbox"
            name="botcheck"
            id=""
            style="display: none;"
          />

           
            <div class="mb-4">
              <label
                for="full_name"
                class="block mb-2 text-sm text-gray-600"
                >Full Name</label
              >
              <input
                type="text"
                name="name"
                id="full_name"
                placeholder="Full name"
                required
                class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
              />
              <div
                class="empty-feedback invalid-feedback text-red-400 text-sm mt-1"
              >
                Please provide your full name.
              </div>
            </div>
            
          

        
            <div class="mb-4">
              <label
                for="email"
                class="block mb-2 text-sm text-gray-600"
                >Email Address</label
              >
              <input
                type="email"
                name="email"
                id="email"
                placeholder="you@company.com"
                required
                class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
              />
              <div class="empty-feedback text-red-400 text-sm mt-1">
                Please provide your email address.
              </div>
              <div class="invalid-feedback text-red-400 text-sm mt-1">
                Please provide a valid email address.
              </div>
            </div>
 
           
          <div class="mb-4">
            <label
              for="message"
              class="block mb-2 text-sm text-gray-600"
              >Your Message</label
            >

            <textarea
              rows="4"
              name="message"
              id="message"
              placeholder="Your Message"
              class="w-full h-28 px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
              required
            ></textarea>
            <div
              class="empty-feedback invalid-feedback text-red-400 text-sm mt-1"
            >
              Please enter your message.
            </div>
          </div>
          <div class="mb-3">
            <button
              type="submit"
              class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none"
            >
              Send Message
            </button>
          </div>
          <p class="text-xs text-center text-gray-400" id="result">
            <span>Powered by <a href="https://Web3Forms.com" class="text-gray-600" target="_blank" rel="noopener noreferrer">Web3Forms</a></span>
          </p>
        </form>


       </div>
      </div>
      <button
        id="w3f__widget--btn"
        @click="open = !open"
        class="fixed z-40 right-5 bottom-5 shadow-lg flex justify-center items-center w-14 h-14 bg-indigo-500 rounded-full focus:outline-none hover:bg-indigo-600 focus:bg-indigo-600 transition duration-300 ease"
      >
        <svg
          class="w-6 h-6 text-white absolute"
          x-show="!open"
          x-transition:enter-start="opacity-0 -rotate-45 scale-75"
          x-transition:enter="transition duration-200 transform ease"
          x-transition:leave="transition duration-100 transform ease"
          x-transition:leave-end="opacity-0 -rotate-45"
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <path
            d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
          ></path>
        </svg>

        <svg
          class="w-6 h-6 text-white absolute"
          x-show="open"
          x-transition:enter-start="opacity-0 rotate-45 scale-75"
          x-transition:enter="transition duration-200 transform ease"
          x-transition:leave="transition duration-100 transform ease"
          x-transition:leave-end="opacity-0 rotate-45"
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    
  </div>

  <style>
      .invalid-feedback,
      .empty-feedback {
        display: none;
      }

      .was-validated :placeholder-shown:invalid ~ .empty-feedback {
        display: block;
      }

      .was-validated :not(:placeholder-shown):invalid ~ .invalid-feedback {
        display: block;
      }

      .is-invalid,
      .was-validated :invalid {
        border-color: #dc3545;
      }

      .is-invalid,
      .was-validated :invalid:focus {
    --tw-ring-color: rgba(220, 53, 69, 0.2);
}
    </style>

    <main class="h-screen flex flex-col space-y-2 items-center justify-center">
      <div>
        <svg
          class="opacity-20 ml-16 mt-6"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          version="1.1"
          id="Capa_1"
          x="0px"
          y="0px"
          width="100"
          height="100"
          viewBox="0 0 415.262 415.261"
          style="enable-background: new 0 0 415.262 415.261;"
          xml:space="preserve"
        >
          <g>
            <path
              d="M414.937,374.984c-7.956-24.479-20.196-47.736-30.601-70.992c-1.224-3.06-6.12-3.06-7.956-1.224   c-10.403,11.016-22.031,22.032-28.764,35.496h-0.612c-74.664,5.508-146.88-58.141-198.288-104.652   c-59.364-53.244-113.22-118.116-134.64-195.84c-1.224-9.792-2.448-20.196-2.448-30.6c0-4.896-6.732-4.896-7.344,0   c0,1.836,0,3.672,0,5.508C1.836,12.68,0,14.516,0,17.576c0.612,6.732,2.448,13.464,3.672,20.196   C8.568,203.624,173.808,363.356,335.376,373.76c-5.508,9.792-10.403,20.195-16.523,29.988c-3.061,4.283,1.836,8.567,6.12,7.955   c30.6-4.283,58.14-18.972,86.292-29.987C413.712,381.104,416.16,378.656,414.937,374.984z M332.928,399.464   c3.673-7.956,6.12-15.912,10.404-23.868c1.225-3.061-0.612-5.508-2.448-6.12c0-1.836-1.224-3.061-3.06-3.672   c-146.268-24.48-264.996-124.236-309.06-259.489c28.764,53.244,72.828,99.756,116.28,138.924   c31.824,28.765,65.484,54.468,102.204,75.888c28.764,16.524,64.872,31.824,97.92,21.421l0,0c-1.836,4.896,5.508,7.344,7.956,3.672   c7.956-10.404,15.912-20.196,24.48-29.376c8.567,18.972,17.748,37.943,24.479,57.527   C379.44,382.94,356.796,393.956,332.928,399.464z"
            />
          </g>
        </svg>
      </div>
    </main>

   
    <script src="https://cdn-tailwindcss.vercel.app/"></script>

    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>

    <script>
        (function () {
          "use strict";
          /*
           * Form Validation
           */
  
          // Fetch all the forms we want to apply custom validation styles to
          const forms = document.querySelectorAll(".needs-validation");
          const result = document.getElementById("result");
          // Loop over them and prevent submission
          Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener(
              "submit",
              function (event) {
                if (!form.checkValidity()) {
                  event.preventDefault();
                  event.stopPropagation();
  
                  form.querySelectorAll(":invalid")[0].focus();
                } else {
                  /*
                   * Form Submission using fetch()
                   */
  
                  const formData = new FormData(form);
                  event.preventDefault();
                  event.stopPropagation();
                  const object = {};
                  formData.forEach((value, key) => {
                    object[key] = value;
                  });
                  const json = JSON.stringify(object);
                  result.innerHTML = "Please wait...";
  
                  fetch("https://api.web3forms.com/submit", {
                    method: "POST",
                    headers: {
                      "Content-Type": "application/json",
                      Accept: "application/json"
                    },
                    body: json
                  })
                    .then(async (response) => {
                      let json = await response.json();
                      if (response.status == 200) {
                        result.innerHTML = json.message;
                        result.classList.remove("text-gray-500");
                        result.classList.add("text-green-500");
                      } else {
                        console.log(response);
                        result.innerHTML = json.message;
                        result.classList.remove("text-gray-500");
                        result.classList.add("text-red-500");
                      }
                    })
                    .catch((error) => {
                      console.log(error);
                      result.innerHTML = "Something went wrong!";
                    })
                    .then(function () {
                      form.reset();
                      form.classList.remove("was-validated");
                      setTimeout(() => {
                        result.style.display = "none";
                      }, 5000);
                    });
                }
                form.classList.add("was-validated");
              },
              false
            );
          });
        })();
      </script>
  </body>
</html>
