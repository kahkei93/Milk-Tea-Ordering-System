<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <title>TehXpress Menu Page</title>
    <link rel="stylesheet" href="style/menustyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </head>
    <body>
        <?php include('./includes/header.php'); ?>

        <h1>Menu</h1>
        <div class="Back">
            <button id="back"><i class="fa fa-mail-reply"></i></button>
        </div>

        <h2>Classic Series</h2>
        <div class="grid">
            <div class = "milk-tea">
                <div class="milktea">
                    <img src="image.jpg\TCMT.jpg" width="200px">
                    <p class="MilkTeaName">Taiwan Classic Milk Tea</p>
                    <p class="Description">The original bubble tea blend: robust black tea brewed to perfection, balanced with creamy milk and a 
                        hint of caramel sweetness.</p>
                    <button onclick="window.location.href='ItemDescription/ItemDetails_TCMT.php'">Order</button> 
                </div>
            </div>
            
            <div class = "milk-tea">
                <div class="milktea">
                    <img src="image.jpg\TT.jpg" width="200px">
                    <p class="MilkTeaName">Teh Tarik</p>
                    <p class="Description">Malaysia’s beloved “pulled tea,” rich and frothy with a malty aroma, served hot or iced for a comforting sip.</p>
                    <button onclick="window.location.href='ItemDescription/ItemDetails_TT.php'">Order</button> 
                </div>
            </div>

            <div class = "milk-tea">
                <div class="milktea">
                    <img src="image.jpg\HKMT.jpg" width="200px">
                    <p class="MilkTeaName">Hong Kong Milk Tea</p>
                    <p class="Description">A bold, silky drink made from strong black tea and evaporated milk, famous for its smooth yet intense flavor.</p>
                    <button onclick="window.location.href='ItemDescription/ItemDetails_HKMT.php'">Order</button> 
                </div>
            </div>

            <div class = "milk-tea">
                <div class="milktea">
                    <img src="image.jpg\T_MT.jpg" width="200px">
                    <p class="MilkTeaName">Thai Milk Tea</p>
                    <p class="Description">Sweet, creamy, and fragrant with star anise and vanilla, this bright orange tea is an irresistible Thai street classic.</p>
                    <button onclick="window.location.href='ItemDescription/ItemDetails_T_MT.php'">Order</button> 
                </div>
            </div>

            <div class = "milk-tea">
                <div class="milktea">
                    <img src="image.jpg\MC.jpg" width="200px">
                    <p class="MilkTeaName">Masala Chai</p>
                    <p class="Description">Spiced black tea infused with cinnamon, cardamom, ginger, and cloves, finished with milk for a warm, aromatic treat.</p>
                    <button onclick="window.location.href='ItemDescription/ItemDetails_MC.php'">Order</button> 
                </div>
            </div>
        </div>

        <h2>Taro & Brown Sugar</h2>
        <div class="grid">
            <div class = "milk-tea">
                <div class="milktea">
                    <img src="image.jpg\TMT.jpg" width="200px">
                    <p class="MilkTeaName">Taro Milk Tea</p>
                    <p class="Description">A creamy purple delight made from sweet taro root, with nutty vanilla notes and a velvety texture.</p>                        <button onclick="window.location.href='ItemDescription/ItemDetails_TMT.php'">Order</button> 
                </div>
            </div>
            <div class = "milk-tea">
                <div class="milktea">
                <img src="image.jpg\BSMT.jpg" width="200px">
                    <p class="MilkTeaName">Brown Sugar Milk Tea</p>
                    <p class="Description">Strong black tea paired with creamy milk and caramelized brown sugar for deep, toasty sweetness.</p>
                    <button onclick="window.location.href='ItemDescription/ItemDetails_BSMT.php'">Order</button> 
                </div>
            </div>

            <div class = "milk-tea">
                <div class="milktea">
                    <img src="image.jpg\BSB.jpg" width="200px">
                    <p class="MilkTeaName">Brown Sugar Boba Milk</p>
                    <p class="Description">A rich blend of fresh milk, chewy boba, and smoky-sweet brown sugar syrup for a decadent drink.</p>
                    <button onclick="window.location.href='ItemDescription/ItemDetails_BSB.php'">Order</button> 
                </div>
            </div>
        </div>
            

        <h2>Fruit Series</h2>
        <div class="grid">
            <div class = "milk-tea">
                <div class="milktea">
                    <img src="image.jpg\SMT.jpg" width="200px">
                    <p class="MilkTeaName">Strawberry Milk Tea</p>
                    <p class="Description">Fresh, fruity, and fragrant, combining black tea with juicy strawberry sweetness and smooth milk.</p>
                    <button onclick="window.location.href='ItemDescription/ItemDetails_SMT.php'">Order</button> 
                </div>
            </div>

                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\PMT.jpg" width="200px">
                        <p class="MilkTeaName">Peach Milk Tea</p>
                        <p class="Description">Juicy peach meets smooth milk tea, creating a fragrant and gently sweet drink perfect for summer days.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_PMT.php'">Order</button> 
                    </div>
                </div>

                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\M_MT.jpg" width="200px">
                        <p class="MilkTeaName">Mango Milk Tea</p>
                        <p class="Description">Tropical sunshine in a cup — black tea blended with ripe, golden mango for a refreshing and creamy twist.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_M_MT.php'">Order</button> 
                    </div>
                </div>

                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\LMT.jpg" width="200px">
                        <p class="MilkTeaName">Lychee Milk Tea</p>
                        <p class="Description">Light and floral, this tea pairs the sweetness of lychee fruit with creamy milk for a refreshing exotic sip.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_LMT.php'">Order</button> 
                    </div>
                </div>

                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\GMT.jpg" width="200px">
                        <p class="MilkTeaName">Grape Milk Tea</p>
                        <p class="Description">A fruity twist with a deep grape aroma and sweet, mellow finish, blended into creamy milk tea.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_GMT.php'">Order</button> 
                    </div>
                </div>

                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\BMT.jpg" width="200px">
                        <p class="MilkTeaName">Blueberry Milk Tea</p>
                        <p class="Description">Sweet-tart blueberries swirled into milk tea for a refreshing berry burst with every sip.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_BMT.php'">Order</button> 
                    </div>
                </div>
            </div>
            

            <h2>Floral & Herbal</h2>
            <div class="grid">
                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\RMT.jpg" width="200px">
                        <p class="MilkTeaName">Rose Milk Tea</p>
                        <p class="Description">Romantic and floral, this blend infuses black tea with rose essence and creamy milk for a soothing, fragrant taste.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_RMT.php'">Order</button> 
                    </div>
                </div>

                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\L_MT.jpg" width="200px">
                        <p class="MilkTeaName">Lavender Milk Tea</p>
                        <p class="Description">Calm and aromatic, lavender flowers meet smooth milk tea for a drink that’s as relaxing as it is delicious.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_L_MT.php'">Order</button> 
                    </div>
                </div>

                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\JMT.jpg" width="200px">
                        <p class="MilkTeaName">Jasmine Milk Tea</p>
                        <p class="Description">Fragrant jasmine green tea with a delicate floral aroma, perfectly balanced by silky milk.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_JMT.php'">Order</button> 
                    </div>
                </div>
            </div>

            <h2>Premium Tea</h2>
            <div class="grid">
                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\MMT.jpg" width="200px">
                        <p class="MilkTeaName">Matcha Milk Tea</p>
                        <p class="Description">Earthy Japanese matcha whisked into milk for a creamy, antioxidant-rich green tea indulgence.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_MMT.php'">Order</button> 
                    </div>
                </div>

                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\EGMT.jpg" width="200px">
                        <p class="MilkTeaName">Earl Grey Milk Tea</p>
                        <p class="Description">Bold black tea infused with bergamot citrus, mellowed by creamy milk for a fragrant afternoon treat.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_EGMT.php'">Order</button> 
                    </div>
                </div>

                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\OO_MT.jpg" width="200px">
                        <p class="MilkTeaName">Oolong Milk Tea</p>
                        <p class="Description">Smooth and aromatic oolong tea with a subtle roasted note, enriched with creamy milk.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_OO_MT.php'">Order</button> 
                    </div>
                </div>
            </div>
            
            <h2>Healthy Alternatives</h2>
            <div class="grid">
                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\S_MT.jpg" width="200px">
                        <p class="MilkTeaName">Soy Milk Tea</p>
                        <p class="Description">airy-free yet delicious — black tea blended with smooth soy milk for a light, nutty flavor.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_S_MT.php'">Order</button> 
                    </div>
                </div>

                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\OMT.jpg" width="200px">
                        <p class="MilkTeaName">Oat Milk Tea</p>
                        <p class="Description">Creamy oat milk and tea combine for a wholesome, dairy-free sip with a hint of natural sweetness.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_OMT.php'">Order</button> 
                    </div>
                </div>

                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\AMT.jpg" width="200px">
                        <p class="MilkTeaName">Almond Milk Tea</p>
                        <p class="Description">A delicate, nutty twist on milk tea made with almond milk, perfect for a light and fragrant drink.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_AMT.php'">Order</button> 
                    </div>
                </div>
            </div>

            <h2>Other</h2>
            <div class="grid">
                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\CMT.jpg" width="200px">
                        <p class="MilkTeaName">Chocolate Milk Tea</p>
                        <p class="Description">Rich cocoa blended with smooth milk tea for a creamy, chocolatey twist on the classic favorite.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_CMT.php'">Order</button> 
                    </div>
                </div>

                <div class = "milk-tea">
                    <div class="milktea">
                        <img src="image.jpg\C_MT.jpg" width="200px">
                        <p class="MilkTeaName">Coffee Milk Tea</p>
                        <p class="Description">A bold mix of coffee and milk tea, offering the best of both worlds in one energizing cup.</p>
                        <button onclick="window.location.href='ItemDescription/ItemDetails_C_MT.php'">Order</button> 
                    </div>
                </div>
            </div>
        <?php include('./includes/footer.php'); ?>
        
    </body>
</html>
