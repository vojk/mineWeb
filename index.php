<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/styleHeader.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleBar.css">
    <link rel="stylesheet" type="text/css" href="css/top.css">
    <link rel="stylesheet" type="text/css" href="css/bottomPart.css">
    <link rel="stylesheet" type="text/css" href="css/OnLoadStyle.css">

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script src="js/visibility.js"></script>

    <title>Document</title>

    <style>
        body {
            text-align: justify;
        }

    </style>


</head>

<body>
<div class="mainContainer">
    <section>
        <header class="header" id="top">
            <div class="headerFreeSpace"></div>
            <div class="menu">
                <ul class="obsahMenu">
                    <li><a class="active" href="index.html">HOME</a></li>
                    <li onmouseout="closeMenu()" onmouseover="openMenu()"><a class="mrTS" href="#home">O UNREAL
                            ENGINE</a></li>
                    <li><a href="#home">DOKUMENTACE</a></li>
                </ul>
            </div>
            <div class="dropdownContainerWrapper" id="dropdownContainerWrapper" onmouseout="closeMenu()"
                 onmouseover="openMenu()">
                <div class="dropdown">
                    <div class="dropdownMenuContainer h_fit">
                        <div class="dropdownText_L h_fit pc_drp_dwn">
                            <div>
                                <div class="headerUnrealEngineDropdownMenu">
                                    <h1>Více infa</h1>
                                </div>

                                <div class="paragraphUnrealEngineDropdownMenu">
                                    <p>
                                        Lorem Ipsum has been the industry's standard dummy text ever since the Lorem
                                        Ipsum
                                        has been the industry's standard dummy text ever since the
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="h_fit pc_drp_dwn">
                            <ul class="dropdownMenu">
                                <li><a href="history.html">HISTORIE</a></li>
                                <li><a href="#home">VERZE</a></li>
                                <li><a href="Mapy.html">3D RENDERY</a></li>
                                <li><a href="hwreq.html">HW POŽADAVKY</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </header>
    </section>

    <section>
        <div class="topHeader">
            <div class="headerUnrealEngine" style="margin: 0 1rem;">
                <div class="h1UE">
                    <h1>Unreal Engine</h1>
                </div>
                <div class="noteUE">
                    <p>This engine is...</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="Container" style="margin-top: 10px;">
            <div class="ContainerBack">
                <main class="mainContentCointeiner">
                    <div class="content">
                        <div class="mainContentCointeiner" id="main">
                            <h6 id="accessibility-content" class="e_V e_S">Hlavní obsah</h6>
                            <div class="content">
                                <div class="Container" style="margin: 0 1rem;">
                                    <div class="lomTitleDiv">
                                        <h1 class="lomTitle">Úvod</h1>
                                    </div>
                                    <div class="lomOdstavec">
                                        <p>
                                <span>
                                    <?php
                                        echo "Ahoj";
                                    ?>
                                </span>
                                        </p>
                                    </div>

                                    <div class="lomOdstavec">
                                        <p>
                                <span>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus aperiam ullam error
                                    nostrum hic illum saepe animi iusto perferendis. Possimus dolor veniam earum distinctio,
                                    quas voluptatum quisquam odit omnis delectus!
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem rem optio atque, quam
                                    autem perspiciatis culpa quae amet laudantium. Pariatur dolorem officia voluptates,
                                    saepe ut assumenda quod accusamus. Ullam, impedit.
                                    Ut animi facere dicta doloribus autem culpa recusandae molestias amet impedit dolores
                                    sapiente, facilis quaerat fugiat tempore error possimus. Libero necessitatibus vero
                                    nostrum voluptatem aspernatur officiis commodi neque optio debitis.
                                </span>
                                        </p>

                                        <div class="imgContainer">
                                            <div>
                                                <div>
                                                    <img src="https://cdn2.unrealengine.com/Unreal+Engine%2Fblog%2Fa-first-look-at-unreal-engine-5%2FUnreal_Engine_5_Nanite-2491x1401-110edc43c67b7d81be869bf703cb40a72e557c96.jpg?resize=1&w=1920"
                                                         alt="CSKO" title="Obrázek" draggable="false">
                                                </div>
                                                <div class="imgComment">
                                                    <p style="display: flex;flex-direction: column;">
                                                        <span>
                                                            Real time render v Unreal Engine 5 (Zdroj Epic Games)
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="lomOdstavec">
                                        <p>
                                <span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus modi voluptas
                                    necessitatibus sed consectetur, nostrum aut at sit nulla, repellat dolores! Repudiandae
                                    doloremque blanditiis ullam odit earum possimus, laborum numquam?
                                </span>
                                        </p>
                                    </div>
                                    <div class="lomOdstavec">
                                        <p>
                                <span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus modi voluptas
                                    necessitatibus sed consectetur, nostrum aut at sit nulla, repellat dolores! Repudiandae
                                    doloremque blanditiis ullam odit earum possimus, laborum numquam?
                                </span>
                                        </p>
                                    </div>
                                    <div class="lomOdstavec">
                                        <p>
                                <span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus modi voluptas
                                    necessitatibus sed consectetur, nostrum aut at sit nulla, repellat dolores! Repudiandae
                                    doloremque blanditiis ullam odit earum possimus, laborum numquam?
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus modi voluptas
                                    necessitatibus sed consectetur, nostrum aut at sit nulla, repellat dolores! Repudiandae
                                    doloremque blanditiis ullam odit earum possimus, laborum numquam?
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus modi voluptas
                                    necessitatibus sed consectetur, nostrum aut at sit nulla, repellat dolores! Repudiandae
                                    doloremque blanditiis ullam odit earum possimus, laborum numquam?
                                </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>
    <section aria-label="Dolní část">
        <div class="bottomPart">
            <div class="mainContentCointeiner" id="bottom">
                <div class="bottomPartContent">
                    <div class="bottomPartContainerText">
                        <h2>Informace</h2>
                        <div class="bottomPartContainerTextWrapper">
                            <div class="bottomPartContainerLinks">
                                <div class="bottomPartContainerLinksCon">
                                    <a href="https://facebook.com">
                                        <div>
                                            <svg
                                                    width="16"
                                                    height="16"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                        d="M9.19795 21.5H13.198V13.4901H16.8021L17.198 9.50977H13.198V7.5C13.198 6.94772 13.6457 6.5 14.198 6.5H17.198V2.5H14.198C11.4365 2.5 9.19795 4.73858 9.19795 7.5V9.50977H7.19795L6.80206 13.4901H9.19795V21.5Z"
                                                        fill="currentColor"
                                                />
                                            </svg>
                                            <p>Facebook</p>
                                        </div>
                                    </a>

                                    <a href="https://instagram.com">
                                        <div>
                                            <svg
                                                    width="16"
                                                    height="16"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M12 7C9.23858 7 7 9.23858 7 12C7 14.7614 9.23858 17 12 17C14.7614 17 17 14.7614 17 12C17 9.23858 14.7614 7 12 7ZM9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12Z"
                                                        fill="currentColor"
                                                />
                                                <path
                                                        d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                                                        fill="currentColor"
                                                />
                                                <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M5 1C2.79086 1 1 2.79086 1 5V19C1 21.2091 2.79086 23 5 23H19C21.2091 23 23 21.2091 23 19V5C23 2.79086 21.2091 1 19 1H5ZM19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z"
                                                        fill="currentColor"
                                                />
                                            </svg>
                                            <p>Instagram</p>
                                        </div>
                                    </a>

                                    <a href="https://twitter.com">
                                        <div>
                                            <svg
                                                    width="16"
                                                    height="16"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M8 3C9.10457 3 10 3.89543 10 5V8H16C17.1046 8 18 8.89543 18 10C18 11.1046 17.1046 12 16 12H10V14C10 15.6569 11.3431 17 13 17H16C17.1046 17 18 17.8954 18 19C18 20.1046 17.1046 21 16 21H13C9.13401 21 6 17.866 6 14V5C6 3.89543 6.89543 3 8 3Z"
                                                        fill="currentColor"
                                                />
                                            </svg>
                                            <p>Twitter</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="bottomPartNextToLinkstext">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus modi voluptas
                                    necessitatibus sed consectetur, nostrum aut at sit nulla, repellat dolores!
                                    Repudiandae
                                    doloremque blanditiis ullam odit earum possimus, laborum numquam?</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <div style="display: block; text-align: center; color: rgba(255, 255, 255, 0.05); background: #0d1015; padding: 10px 0">
        <p>(c) Tmej Vojtěch 14.10. 2022</p></div>
</div>

</body>

</html>