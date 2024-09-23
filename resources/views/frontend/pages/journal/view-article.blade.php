@extends('frontend.global.frontend_master')
@section('title', 'Journals')
@section('frontend_custom_stylesheet')
    <style>
        .paper-details-content {
            display: flex;
            justify-content: space-between;
            align-items: start;
            padding: 1rem;
            gap: 10px;
        }

        .paper-details-left-content {
            flex: 1;
            width: 30%;
        }
        .paper-details-middle-content {
            flex: 2;
            width: 60%;
        }
        .paper-details-right-content {
            flex: 1;
            width: 30%;
        }

        .icon-container {
    display: flex;
    gap: 15px;
    margin-top: 15px;
}

.icon-button {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    cursor: pointer;
    font-size: 14px;
    text-align: center;
}

.icon-button i {
    font-size: 24px; /* Larger icon size */
    margin-bottom: 5px; /* Space between icon and text */
}

.icon-button:hover {
    background-color: #0056b3;
}

    </style>
@endsection

@section('frontend_content')
    <main>
        <div class="view-article-hero">
            <div class="container-xxl">
                <div class="view-artical-content-wrapper">
                    <div class="view-artical-content">
                        <div class="view-artical-left-section">
                            <p class="view-article-category-top">Information Medicine Unlocked</p>
                            <span class="view-article-category-bottom">volume 31, 2022 100973</span>
                            <div class="view-artical-heading">
                                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, nam ex animi magnam
                                    libero
                                    id!
                                </h3>
                            </div>

                            <div class="view-artical-author">
                                <span>mehedihasan.et</span>
                            </div>
                            <div class="time-to-decision">
                                <div class="time-block">
                                    <p class="time-label">
                                        <i class="fa-solid fa-clock"></i> Time To First Decision
                                    </p>
                                    <p class="time-value">2.6 weeks</p>
                                </div>
                                <div class="time-block">
                                    <p class="time-label">
                                        <i class="fa-solid fa-clock"></i> Time To First Decision
                                    </p>
                                    <p class="time-value">2.6 weeks</p>
                                </div>
                                <div class="time-block">
                                    <p class="time-label">
                                        <i class="fa-solid fa-clock"></i> Time To First Decision
                                    </p>
                                    <p class="time-value">2.6 weeks</p>
                                </div>
                                <div class="time-block">
                                    <p class="time-label">
                                        <i class="fa-solid fa-clock"></i> Time To First Decision
                                    </p>
                                    <p class="time-value">2.6 weeks</p>
                                </div>
                                <div class="time-block">
                                    <p class="time-label">
                                        <i class="fa-solid fa-clock"></i> Time To First Decision
                                    </p>
                                    <p class="time-value">2.6 weeks</p>
                                </div>

                            </div>
                            <div class="social-icons">
                                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>

                        <div class="view-artical-right-section">
                        </div>
                    </div>
                    <div class="view-artical-bottom-content">
                        <div class="view-artical-bottom-content-left">
                            <span class="doi" style="display: inline; font-size: 8px;">Doi:</span> <a
                                style="text-decoration: none; font-size: 12px; color:white;"
                                href="#">https://chatgpt.com/</a>
                            <span>Under a creative Commons <span
                                    style="display: inline; color: var(--blue-color);">license</span> </span>
                        </div>
                        <div class="view-artical-bottom-content-right">
                            <span>Get right and contents</span>
                            <span class="open-access">open access</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="paper-details-section mt-4">

            <div class="container-xxl">

                <div class="paper-details-content">

                    <div class="paper-details-left-content">
                        <h6 class="paper-details-content-title">Outline</h6>
                        <ul class="section-list">
                            <li class="section-item">
                                <p class="toggle">Abstract</p>
                            </li>
                            <li class="section-item">
                                <p class="toggle">Keywords</p>
                                <ul class="sub-section-list">
                                    <li class="sub-section-item" data-section="keyword-definition">
                                        <p>Definition: Understanding the core concept...</p>
                                    </li>
                                    <li class="sub-section-item" data-section="keyword-importance">
                                        <p>Importance: Why keywords matter...</p>
                                    </li>
                                    <li class="sub-section-item" data-section="keyword-examples">
                                        <p>Examples: Commonly used keywords...</p>
                                    </li>
                                </ul>
                            </li>
                            <li class="section-item">
                                <p class="toggle">Author Contribution</p>
                            </li>
                            <li class="section-item">
                                <p class="toggle">Funding Declaration</p>
                            </li>
                            <li class="section-item">
                                <p class="toggle">Conflict of Interest</p>
                            </li>
                            <li class="section-item">
                                <p class="toggle">Acknowledgement</p>
                            </li>
                            <li class="section-item">
                                <p class="toggle">References</p>
                            </li>
                        </ul>

                        <div class="image-gallery">
                            <div class="left-side-figure">
                                <img src="https://via.placeholder.com/150" alt="Image 1">
                                <img src="https://via.placeholder.com/150" alt="Image 2">
                                <img src="https://via.placeholder.com/150" alt="Image 3">
                                <img src="https://via.placeholder.com/150" alt="Image 4">
                                <img src="https://via.placeholder.com/150" alt="Image 5">
                                <img src="https://via.placeholder.com/150" alt="Image 6">
                            </div>

                        </div>
                        <a class="see-all-figure">
                            See All Figure <i class="fa-solid fa-chevron-down"></i>
                        </a>
                    </div>

                    <!-- Middle Content -->
                    <div class="paper-details-middle-content">
                        <h6 class="paper-details-content-title">Abstract</h6>
                        <div class="content-body" id="content-body">
                            <!-- Abstract content loaded by default -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ipsum deserunt dolore numquam, eaque temporibus aliquam voluptatum architecto harum inventore voluptates dolorem, reprehenderit alias officia consequatur minima recusandae similique cumque, rerum quo obcaecati nostrum vitae ut dicta! Quod non velit fugiat? Magnam, culpa blanditiis voluptas recusandae porro delectus omnis totam provident exercitationem aliquam quo asperiores dolorem. Aperiam placeat incidunt similique. Sed ad facere sint commodi nihil blanditiis quos porro nobis ipsam suscipit odio cum maiores tenetur quibusdam qui ullam consequuntur fuga, cumque neque. Nesciunt obcaecati repudiandae molestias iste similique sequi ea doloribus suscipit! Officia quibusdam impedit consequatur, voluptate magni ex, velit sit temporibus, ab iusto laudantium alias minima illum. Totam quia illum culpa maxime! Harum maxime numquam corrupti est quibusdam ad praesentium dolorum quos excepturi unde, cupiditate alias ut provident dolor libero nostrum id voluptatem obcaecati quod consequatur quidem perspiciatis. Mollitia quo error soluta expedita, doloremque blanditiis vel culpa beatae id porro laboriosam quia nihil sed exercitationem debitis ut nostrum? Dolorum tempora, cum totam qui quas accusamus voluptates, nam sed quibusdam animi iure magni dolorem accusantium! Voluptates alias culpa, ex ut ipsa hic iste. Possimus ad eos omnis dolores ut. Inventore ducimus modi laborum pariatur animi, eligendi sint explicabo consequatur?</p>
                        </div>
                    </div>

                    <!-- Right Content -->
                    <div class="paper-details-right-content">
                        <div class="icon-container">
                            <div class="icon-button">
                                <i class="fas fa-file-pdf"></i>
                                <span>View PDF</span>
                            </div>
                            <div class="icon-button">
                                <i class="fas fa-download"></i>
                                <span>Download</span>
                            </div>
                            <div class="icon-button">
                                <i class="fas fa-bell"></i>
                                <span>Subscribe</span>
                            </div>
                        </div>
                        <p>Additional Information or Tools can go here.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('frontend_custom_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.toggle').on('click', function() {
                let subList = $(this).next('.sub-section-list');
                subList.slideToggle();
            });
        });
    </script>

@endsection
