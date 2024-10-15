<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3016">
    <div class="header">
        <div class="container">
            <h2 class="header-title">FAQs</h2>
            <p class="header-description">Start the conversation to establish a good relationship and business.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="common-questions">COMMON QUESTIONS</h3>
                <h2 class="got-questions">Got Questions? We've Got Answers!</h2>
                <p class="info-description">Find all the information you need about MobiCare's services right here.</p>
            </div>
            <div class="col-md-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Est platea fringilla letius et felis euismod in?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Eros habitasse facilisis rhoncus morbi interdum ac iaculis imperdiet. Hendrerit platea nam non erat vulputate. Phasellus velit maximus cras praesent nunc aptent aenean ornare risus tempus cursus.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Tempor nibh commodo natoque primis suspendisse vivamus habitant?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Eros habitasse facilisis rhoncus morbi interdum ac iaculis imperdiet. Hendrerit platea nam non erat vulputate. Phasellus velit maximus cras praesent nunc aptent aenean ornare risus tempus cursus.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Facilisi ex aenean tempor sociosqu sodales parturient nec?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Eros habitasse facilisis rhoncus morbi interdum ac iaculis imperdiet. Hendrerit platea nam non erat vulputate. Phasellus velit maximus cras praesent nunc aptent aenean ornare risus tempus cursus.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Sed mollis luctus egestas cursus sociosqu?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Eros habitasse facilisis rhoncus morbi interdum ac iaculis imperdiet. Hendrerit platea nam non erat vulputate. Phasellus velit maximus cras praesent nunc aptent aenean ornare risus tempus cursus.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Viverra tincidunt potenti litora erat fames congue placerat?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Eros habitasse facilisis rhoncus morbi interdum ac iaculis imperdiet. Hendrerit platea nam non erat vulputate. Phasellus velit maximus cras praesent nunc aptent aenean ornare risus tempus cursus.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Hendrerit tincidunt ut magnis malesuada aliquet?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Eros habitasse facilisis rhoncus morbi interdum ac iaculis imperdiet. Hendrerit platea nam non erat vulputate. Phasellus velit maximus cras praesent nunc aptent aenean ornare risus tempus cursus.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Quis hac donec aliquet faucibus ornare orci risus?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Eros habitasse facilisis rhoncus morbi interdum ac iaculis imperdiet. Hendrerit platea nam non erat vulputate. Phasellus velit maximus cras praesent nunc aptent aenean ornare risus tempus cursus.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
