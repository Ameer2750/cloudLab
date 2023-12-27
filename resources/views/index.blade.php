<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- tailwind  -->
    <script src="https://cdn.tailwindcss.com"></script>


    <!--font poppins  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!--icon -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    <!-- faicons -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <x-header />


    <!-- Why Customers Love Doing Business with Us -->
    <section class="bg-blue-100 py-14 px-10 flex flex-col items-center">
        <h1 class="text-3xl font-semibold mb-8">Why Customers Love Doing Business with Us</h1>

        <div class="flex flex-row flex-wrap gap-4 items-center justify-center">
            <div class="flex flex-col gap-2 " style="width: 48%;">
                <img class="w-[200px] mb-4" src="{{asset('images/business-agility.webp')}}" alt="Business Agility">
                <h3 class="text-lg font-semibold">Business Agility</h3>
                <p class="text-base font-thin leading-6">
                    Build and run your applications from anywhere using public, hybrid, or multi-cloud. Choose the best
                    platform that works fast without vendor lock-in.
                </p>
            </div>

            <div class="flex flex-col gap-2  " style="width: 48%;">
                <img class="w-[250px] mb-4" src="{{asset('images/team-experts.webp')}}" alt="Team of Experts">
                <h3 class="text-lg font-semibold">Team of Experts</h3>
                <p class="text-base font-thin leading-6">
                    Build and run your applications from anywhere using public, hybrid, or multi-cloud. Choose the best
                    platform that works fast without vendor lock-in.
                </p>
            </div>

            <div class="flex flex-col gap-2  " style="width: 48%;">
                <img class="w-[200px] " src="{{asset('images/hig-security.webp')}}" alt="Highly Secure Cloud">
                <h3 class="text-lg font-semibold">Highly Secure Cloud</h3>
                <p class="text-base font-thin leading-6">
                    We maintain a high-security posture for your cloud applications and a disaster recovery plan—should
                    that be needed—is instantly ready to deploy and protect your data.
                </p>
            </div>

            <div class="flex flex-col gap-2  " style="width: 48%;">
                <img class="w-[300px] mb-4" src="{{asset('images/cost-efficiency.webp')}}" alt="Cost Efficiency">
                <h3 class="text-lg font-semibold">Cost Efficiency</h3>
                <p class="text-base font-thin leading-6">
                    Our deep knowledge in cloud architecture and technology substantially reduces your cloud spend.
                </p>
            </div>
        </div>
    </section>

    <!-- Ready to accelerate -->
    <section class="">
        <div>
            <h2>Ready to Accelerate?</h2>
            <p>
                No matter where you are in your cloud journey, we can help you migrate, modernize, and manage your AWS
                environment. Let’s accelerate your growth and fast-track your business outcomes.
            </p>
        </div>
        <div>
            <form action="">
                <div>
                    <label for="Email">Business Email</label>
                    <input type="text">
                </div>
                <div>
                    <div>
                        <label for="FirstName*">First Name</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="LastName">Last Name</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="CompanyName">Company Name</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="JobTitle">Job Title</label>
                        <input type="text">
                    </div>

                    <div>
                        <label for="Email">Business Email</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="Email">Business Email</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="Email">Business Email</label>
                        <input type="text">
                    </div>
                </div>
                <div>
                    <label for="Email">Business Email</label>
                    <input type="text">
                </div>

                <button>Let's Go!</button>
            </form>
        </div>
    </section>





    <x-footer />

</body>

</html>