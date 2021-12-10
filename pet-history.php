<?php
session_start();
require_once('./includes/meta.php');
require_once('./services/auth-service.php');
require_once('./includes/db-config.php');

if (empty($_SESSION['username'])) {
    redirectUnauthorized();
}
?>

<body>
    <?php
    require('./component/header.php')
    ?>
    <div class="history-view">
        <div class="history">
            <div class="history__header">
                <div class="history__header-pic">
                    <img src="https://picsum.photos/id/1/200/300" alt="">
                </div>
                <div class="history__header-details">
                    <h3>Pet ID: 1</h3>
                    <h3>Name: 1</h3>
                    <h3>Age: 1</h3>
                    <h3>Gender: 1</h3>
                    <h3>Breed: 1</h1>
                </div>
            </div>

            <div class="history__body">
                <div class="history__body-content">
                    <h1>Title: Ilness</h1>
                    <div class="history__body-content__main">
                        <p>Content: Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ipsa voluptatibus, tempore quo at voluptas blanditiis facere velit, dolor quod excepturi, ullam aliquid eaque asperiores non nihil architecto minima quos!</p>
                    </div>
                    <div class="history__body-content__date">
                        <p>Date: 2021/12/06</p>
                    </div>

                </div>

                <div class="history__body-content">
                    <h1>Title: Ilness</h1>
                    <div class="history__body-content__main">
                        <p>Content: Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ipsa voluptatibus, tempore quo at voluptas blanditiis facere velit, dolor quod excepturi, ullam aliquid eaque asperiores non nihil architecto minima quos!</p>
                    </div>
                    <div class="history__body-content__date">
                        <p>Date: 2021/12/06</p>
                    </div>

                </div>
                <div class="history__body-content">
                    <h1>Title: Ilness</h1>
                    <div class="history__body-content__main">
                        <p>Content: Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ipsa voluptatibus, tempore quo at voluptas blanditiis facere velit, dolor quod excepturi, ullam aliquid eaque asperiores non nihil architecto minima quos!</p>
                    </div>
                    <div class="history__body-content__date">
                        <p>Date: 2021/12/06</p>
                    </div>
                </div>

                <div class="history__body-content">
                    <h1>Title: Ilness</h1>
                    <div class="history__body-content__main">
                        <p>Content: Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ipsa voluptatibus, tempore quo at voluptas blanditiis facere velit, dolor quod excepturi, ullam aliquid eaque asperiores non nihil architecto minima quos!</p>
                    </div>
                    <div class="history__body-content__date">
                        <p>Date: 2021/12/06</p>
                    </div>
                </div>
            </div>




        </div>
    </div>
</body>

</html>