<?php include './template/head.php'; ?>

<body id="home" onclick="clickDocument()">

    <div class="container">

        <?php include './template/header.php'; ?>



        <!-- START OF MAIN -->
        <main>


            <div id="preview-container" onblur="hidePreview()">
                <img id="preview-image" width="100" height="100">
            </div>

            <div id="preview-container2" onblur="hidePreview2()">
                <img id="preview-image2" width="100" height="100">
            </div>

            <div class="sectionhead">

                <div class="sectionheadtext">

                    <h1>The Bond Add-in</h1>
                    <h2>A revolutionary<br>new interface for <br>Microsoft Word</h2>
                    <h2 class="price">£24.99</h2>
                    <div class="description-item-container">
                        <div class="description-item" data-index="0">
                            <p>Use function keys to select drop down menus, menu commands, and dialogue box commands.</p>
                            <p>Custom Quick Command Bars (QCB)- access commands with a single function key, customise your own Quick Command Bars.</p>
                            <p>Custom Keyboard Drop Down Menu (KDDM)- add commands to 48 keyboard keys on one menu, 12 KDDMs available, mapped to function keys.</p>
                        </div>
                        <div class="description-item" data-index="1">
                            <p>Use function keys to access drop down menus and menu commands.</p>

                        </div>
                        <div class="description-item" data-index="2">
                            <p>Keyboard Drop Down Menu (KDDM) - fully customisable keyboard menu.</p>
                            <p>12 KDDMs to customise, each with 48 commands. Map any command to any key. Even map previously opened documents to any key.</p>
                            <p>Rename KDDM menu titles - e.g. change "F1 File" to "F1 Main".</p>
                        </div>
                        <div class="description-item" data-index="3">
                            <p>Quick Command Bars (QCB) - fully customisable command bars.</p>
                            <p>Create custom command bars with 11 commands per bar, each command instantly accessible with just one function key press.</p>
                            <p>Easily change titles of QCBs.</p>
                            <p>Display up to 12 QCBs at one time - 132 commands, all accessible with the mouse too!</p>

                        </div>
                        <div class="description-item" data-index="4">
                            <p>Add flyout menus to Quick Command Bars for quicker access.</p>
                        </div>
                        <div class="description-item" data-index="5">
                            <p>Show or hide individual Quick Command Bars, easily add new commands, rename QCBs, change display order.</p>
                        </div>
                        <div class="description-item" data-index="6">
                            <p>Custom colour themes supplied.</p>
                            <p>User editable .xml file included, make your own themes!</p>
                        </div>
                    </div>
                </div>
                <div class="carousel">
                    <button class="carousel-btn prev">❮</button>
                    <button class="carousel-btn next">❯</button>
                    <div class="carousel-thumbnails">
                        <img src="assets/images/carousel/Word1024x630startsmall.jpg" data-index="0" />
                        <img src="assets/images/carousel/Word1024x630qsmall.jpg" data-index="1" />
                        <img src="assets/images/carousel/Word1024x630c2small.jpg" data-index="2" />
                        <img src="assets/images/carousel/Word1024x630d2small.jpg" data-index="3" />
                        <img src="assets/images/carousel/Word1024x630nsmall.jpg" data-index="4" />
                        <img src="assets/images/carousel/Word1024x630osmall.jpg" data-index="5" />
                        <img src="assets/images/carousel/Word1024x630psmall.jpg" data-index="6" />

                    </div>
                    <div class="carousel-track">
                        <div class="slide fade active"><img src="assets/images/carousel/Word1024x630start.png" /></div>
                        <div class="slide fade active"><img src="assets/images/carousel/Word1024x630q.png" /></div>
                        <div class="slide fade active"><img src="assets/images/carousel/Word1024x630c2.png" /></div>
                        <div class="slide fade active"><img src="assets/images/carousel/Word1024x630d2.png" /></div>
                        <div class="slide fade active"><img src="assets/images/carousel/Word1024x630n.png" /></div>
                        <div class="slide fade active"><img src="assets/images/carousel/Word1024x630o.png" /></div>
                        <div class="slide fade active"><img src="assets/images/carousel/Word1024x630p.png" /></div>

                    </div>
                </div>

            </div>

            <div id="mobile-view">
                <div class="mobile-header-text">
                    <h1>The Bond Add-in</h1>
                    <h1>A revolutionary</h1>
                    <h1>new interface for</h1>
                    <h1>Microsoft Word</h1>
                </div>
                <div class="carousel-mobile">
                    <div class="carousel-functions">
                        <button class="carousel-btn prev">❮</button>
                        <button class="carousel-btn next">❯</button>
                    </div>
                    <div class="carousel-container">
                        <div class="carousel-track">
                            <div class="slide fade active">
                                <img src="assets/images/carousel/Word1024x630a.png" />
                            </div>
                            <div class="slide fade active"><img src="assets/images/carousel/Word1024x630b.png" /></div>
                            <div class="slide fade active"><img src="assets/images/carousel/Word1024x630c.png" /></div>
                            <div class="slide fade active"><img src="assets/images/carousel/Word1024x630d.png" /></div>
                            <div class="slide fade active"><img src="assets/images/carousel/Word1024x630e.png" /></div>
                            <div class="slide fade active"><img src="assets/images/carousel/Word1024x630f.png" /></div>
                        </div>
                    </div>
                    <div class="description-item-container">
                        <div class="description-item" data-index="0">
                            <p>1 Use function keys to open pull down menus and run commands</p>
                            <p>Use function keys to adjust values in dialogue boxes</p>
                        </div>
                        <div class="description-item" data-index="1">
                            <p>2 Use function keys to open pull down menus and run commands</p>
                            <p>Use function keys to adjust values in dialogue boxes</p>
                        </div>
                        <div class="description-item" data-index="2">
                            <p>3 Use function keys to open pull down menus and run commands</p>
                            <p>Use function keys to adjust values in dialogue boxes</p>
                        </div>
                        <div class="description-item" data-index="3">
                            <p>4 Use function keys to open pull down menus and run commands</p>
                            <p>Use function keys to adjust values in dialogue boxes</p>
                        </div>
                        <div class="description-item" data-index="4">
                            <p>5 Use function keys to open pull down menus and run commands</p>
                            <p>Use function keys to adjust values in dialogue boxes</p>
                        </div>
                        <div class="description-item" data-index="5">
                            <p>6 Use function keys to open pull down menus and run commands</p>
                            <p>Use function keys to adjust values in dialogue boxes</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="buynowbar">
                <p>Download our free 90 day trial of the Bond Add In for Microsoft Word.<br>
                    Buy now for £24.99. Lifetime free updates.</p>
                <a class="downloadaddin" href="bondui-v270-setup.msi"></a>
                <a class="buynow" href="buynow.php"></a>
            </div>



            <div class="sectionrow">

                <div class="section">

                    <div class="image-wrapper" onclick="previewImage('assets/images/Word2A.png')">
                        <div class="image-container">
                            <img src="assets/images/Word2Asmall.gif" class="slide-image2" alt="Word Add-in Menu Bar and QCB">
                        </div>
                        <div class="Magnifying">
                            <img src="assets/images/3d-magnifier.svg" height="50" width="50" alt="Zoom Icon">
                        </div>
                    </div><!-- END OF IMAGE-WRAPPER -->

                    <div class="sub-section">
                        <h2>Use function keys to display pull down menus, and select commands.
                        </h2>

                        <p>Quickly access your favorite commands with easy to remember function key sequences - F1 F1 Save, F1 F7 Print, etc.
                        </p>



                    </div><!-- END OF SUB-SECTION -->

                </div><!-- END OF SECTION -->





                <div class="section">

                    <div class="image-wrapper" onclick="previewImage('assets/images/Word1blue.png')">
                        <div class="image-container">
                            <img src="assets/images/Word1bluesmall.gif" class="slide-image" alt="Word Add-in Menu Bar and Drop Down Menu With Flyout Menu">
                        </div>
                        <div class="Magnifying">
                            <img src="assets/images/3d-magnifier.svg" height="50" width="50" alt="Zoom Icon">
                        </div>
                    </div><!-- END OF IMAGE-WRAPPER -->


                    <div class="sub-section">

                        <h2>Quick Command Bars
                        </h2>

                        <p>Access commands with a single function key, customise your own Quick Command Bars (QCBs).</p>
                        <p>11 commands per QCB. Easy to add and edit commands.</p>
                        <p>Rename QCBs, change display order, turn on and off individual QCBs, change number of QCBs displayed, from 1 to 12.</p>
                        <p>Save your QCB settings as a standard .xml file.</p>
                    </div><!-- END OF SUB-SECTION -->

                </div><!-- END OF SECTION -->



                <div class="section">

                    <div class="image-wrapper" onclick="previewImage('assets/images/Word1336I2.png')">
                        <div class="image-container">
                            <img src="assets/images/Word1336I2small.gif" class="slide-image2" alt="Word Add-in Menu Bar and Drop Down Menu With Flyout Menu">
                        </div>
                        <div class="Magnifying">
                            <img src="assets/images/3d-magnifier.svg" height="50" width="50" alt="Zoom Icon">
                        </div>
                    </div><!-- END OF IMAGE-WRAPPER -->




                    <div class="sub-section">

                        <h2>Keyboard Drop Down Menu (KDDM)
                        </h2>
                        <p>Map your favourite commands to any key.</p>
                        <p>Access the KDDM by pressing its menu function key, then press the key of the command you want.</p>
                        <p>Super easy to add or change commands.</p>
                        <p>Save your KDDM settings as a standard .xml file.</p>

                    </div><!-- END OF SUB-SECTION -->


                </div><!-- END OF section -->



            </div><!-- END OF SECTIONROW -->




            <div class="sectionrow">

                <div class="section">

                    <div class="image-wrapper" onclick="previewImage('assets/images/Word3A.PNG')">
                        <div class="image-container">
                            <img src="assets/images/Word3Asmall.gif" class="slide-image2" alt="Word Add-in Menu Bar and QCB">
                        </div>
                        <div class="Magnifying">
                            <img src="assets/images/3d-magnifier.svg" height="50" width="50" alt="Zoom Icon">
                        </div>
                    </div><!-- END OF IMAGE-WRAPPER -->

                    <div class="sub-section">
                        <h2>New dialogue boxes use function keys to select commands.
                        </h2>
                        <p>Large, easy-to-select buttons — ideal for both mouse and touchscreen use.</p>
                        <p>F12 key moves down to next sub-window, Escape key moves up to previous sub-window.</p>


                    </div><!-- END OF SUB-SECTION -->

                </div><!-- END OF SECTION -->





                <div class="section">

                    <div class="image-wrapper" onclick="previewImage2('assets/images/AdvancedFind.gif')">
                        <div class="image-container">
                            <img src="assets/images/Word6small.gif" class="slide-image" alt="Word Add-in Menu Bar and Drop Down Menu With Flyout Menu">
                        </div>
                        <div class="Magnifying">
                            <img src="assets/images/3d-magnifier.svg" height="50" width="50" alt="Zoom Icon">
                        </div>
                    </div><!-- END OF IMAGE-WRAPPER -->


                    <div class="sub-section">

                        <h2>Advanced Find
                        </h2>

                        <p>Intuitive dialog boxes are designed to support efficient keyboard use, while enlarged buttons enhance usability for mouse users.</p>

                    </div><!-- END OF SUB-SECTION -->

                </div><!-- END OF SECTION -->



                <div class="section">

                    <div class="image-wrapper" onclick="previewImage2('assets/images/QCBAddCommand2.gif')">
                        <div class="image-container">
                            <img src="assets/images/QCBAddCommandsmall.gif" class="slide-image2" alt="Word Add-in Menu Bar and Drop Down Menu With Flyout Menu">
                        </div>
                        <div class="Magnifying">
                            <img src="assets/images/3d-magnifier.svg" height="50" width="50" alt="Zoom Icon">
                        </div>
                    </div><!-- END OF IMAGE-WRAPPER -->




                    <div class="sub-section">

                        <h2>Quick Command Bars (QCBs)
                        </h2>

                        <p>Easily add custom commands to your QCBs.</p>
                        <p>Press the function key of the command you wish to change:</p>
                        <p>Select the new command from the standard drop down menu:</p>
                        <p>The command is immediately added to the Quick Command Bar.</p>
                    </div><!-- END OF SUB-SECTION -->


                </div><!-- END OF SECTION -->



            </div><!-- END OF SECTIONROW -->




            <div class="sectionrow">

                <div class="section">

                    <div class="image-wrapper" onclick="previewImage('assets/images/Word5.png')">
                        <div class="image-container">
                            <img src="assets/images/Word5small.gif" class="slide-image2" alt="Word Add-in Menu Bar and Drop Down Menu With Flyout Menu">
                        </div>
                        <div class="Magnifying">
                            <img src="assets/images/3d-magnifier.svg" height="50" width="50" alt="Zoom Icon">
                        </div>
                    </div><!-- END OF IMAGE-WRAPPER -->




                    <div class="sub-section">

                        <h2>Font selection made easy!
                        </h2>

                        <p>See more fonts at a glance with a larger font menu.</p>
                        <p>Quickly navigate to font sections by typing the first letter of the font, or section number (e.g., '01', '02').</p>
                        <p>Move in any direction with the arrow keys to quickly select fonts.</p>
                    </div><!-- END OF SUB-SECTION -->


                </div><!-- END OF section -->





                <div class="section">

                    <div class="image-wrapper" onclick="previewImage2('assets/images/Word6.png')">
                        <div class="image-container">
                            <img src="assets/images/Word6small2.gif" class="slide-image" alt="Word Add-in Menu Bar and Drop Down Menu With Flyout Menu">
                        </div>
                        <div class="Magnifying">
                            <img src="assets/images/3d-magnifier.svg" height="50" width="50" alt="Zoom Icon">
                        </div>
                    </div><!-- END OF IMAGE-WRAPPER -->


                    <div class="sub-section">

                        <h2>Easy to use dialogue boxes.
                        </h2>

                        <p>Press F1 and F2 Multi-Toggle Buttons to cycle through options.
                        </p>
                        <p></p>
                    </div><!-- END OF SUB-SECTION -->

                </div><!-- END OF SECTION -->



                <div class="section">

                    <div class="image-wrapper" onclick="previewImage('assets/images/Word7.png')">
                        <div class="image-container">
                            <img src="assets/images/Word7small.gif" class="slide-image" alt="Word Add-in Menu Bar and Drop Down Menu With Flyout Menu">
                        </div>
                        <div class="Magnifying">
                            <img src="assets/images/3d-magnifier.svg" height="50" width="50" alt="Zoom Icon">
                        </div>
                    </div><!-- END OF IMAGE-WRAPPER -->




                    <div class="sub-section">

                        <h2>Insert Hyperlink dialogue box.
                        </h2>

                        <p>Big, user-friendly buttons that are perfect for both mouse and touchscreen navigation.</p>
                        
                    </div><!-- END OF SUB-SECTION -->


                </div><!-- END OF SECTION -->



            </div><!-- END OF SECTIONROW -->


<div class="sectionrowtext">
<h2>The Bond Add In for Microsoft Word</h2>
<p>The revolutionary new interface for Word. The fastest way to access commands with your keyboard. A classic menu with function key access.</p>

</div><!-- END OF SECTIONROWTEXT -->


        </main><!-- END OF MAIN -->


        <?php include './template/footer.php'; ?>