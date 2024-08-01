<?php $this->params['title'] = $GLOBALS['text']['Project_Logistics_']; ?>
<?php $this->params['second'] =  $GLOBALS['text']['__SERVICES__']; ?>
<?php $this->params['href'] =  Yii::$app->urlManager->createUrl('services') . '/' . $_COOKIE['language'] ?>
<a  data-aos="fade-right" data-aos-duration="2000" class="go-to-up" href="#top">
    <button >
        <i class="bi bi-chevron-up"></i>
    </button>
</a>
<section class="Services-drop-pages ">
    <div class="container">
        <div class="services-drop-pages-sec ">
            <div class="border-div">
                <div class="first-div">
                    <div class="img-div">
                        <img src="../images/project-page-img.jpg" alt="">
                    </div>
                    <div class="p-under-img">
                        <p>
                            <?= $GLOBALS['text']['Managing_Complex'] ?>
                        </p>
                    </div>
                    <div class="green-box text-white d-flex justify-content-between ">
                        <div class="green-box-item">
                            <h5>
                                <?= $GLOBALS['text']['Easy_&_Convenient__'] ?>
                            </h5>
                            <p>
                                <?= $GLOBALS['text']['You’ll_find__Save_Secureprojectlogistics'] ?>
                            </p>
                        </div>
                        <div class="green-box-item">
                            <h5>
                                <?= $GLOBALS['text']['Save_Secure'] ?>
                            </h5>
                            <p>
                                <?= $GLOBALS['text']['You_benefit_from_Save_Secureprojectlogistics'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="services-include">
                        <h4>
                            <?= $GLOBALS['text']['Our_Project__projectlogistics__'] ?>
                        </h4>
                        <ul class="px-0">
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= $GLOBALS['text']['project_logistics'] ?>
                                </p>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= $GLOBALS['text']['road_studies__'] ?>
                                </p>
                            </li>
                            
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= $GLOBALS['text']['project_logistics__'] ?>
                                </p>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= $GLOBALS['text']['project_flow__'] ?>
                                </p>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= $GLOBALS['text']['cargo_supervision__'] ?>
                                </p>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= $GLOBALS['text']['full_partial__'] ?>
                                </p>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= $GLOBALS['text']['consolidation_packing__'] ?>
                                </p>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= $GLOBALS['text']['transport_insurance__'] ?>
                                </p>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= $GLOBALS['text']['oversize_cargoes__'] ?>
                                </p>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= $GLOBALS['text']['heavy_loads__'] ?>
                                </p>
                            </li>
                            <!-- <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= $GLOBALS['text']['pre_shipment_inspection_'] ?>
                                </p>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= $GLOBALS['text']['cargo_surveying__'] ?>
                                </p>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= $GLOBALS['text']['customs_and__'] ?>
                                </p>
                            </li> -->
                        </ul>
                        <button class="border-0"  type="submit">
                            <a href="<?= Yii::$app->urlManager->createUrl('contact')  ?>/<?= $_COOKIE['language'] ?>">
                                <?= $GLOBALS['text']['Contact_Us_Title'] ?>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
