<?php include'../init.php'; ?>

<!DOCTYPE html>
<html lang="en-ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل حساب جديد</title>
    <!-- Custom styles-path -->
    <link rel="stylesheet" href="css/styley.css">

    <!-- Font Awesome kit script -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <!-- Google Fonts Open Sans-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="img/html-5.png">
</head>

<body>
    <img class="wave" src="img/wave.svg">
    <div class="container">
        <div class="img">
            <img src="img/login-mobile.svg">
        </div>
        <div class="login-container">
        <form action="" method="post" enctype="multipart/form-data">
                <h2>تسجيل جديد</h2>
                <p>إملأ البيانات</p>
                <div class="social">
               
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>اسم المستخدم</h5>
                        <input class="input" name="name" type="text">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h5>الايميل</h5>
                        <input class="input" name="email" type="email">
                    </div>
                </div>
                <div>
               
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-image"></i>
                    </div>
                    <div>
                        <h5>الصورة</h5>
                        <input class="input" name="img" type="file">
                    </div>
                </div>
                <div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <h5>الموبايل</h5>
                        <input class="input" name="phone" type="text">
                    </div>
                </div>
                <div>
                
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-key"></i>
                    </div>
                    <div>
                        <h5>الباسورد</h5>
                        <input class="input" name="password" type="password">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-key"></i>
                    </div>
                    <div>
                        <h5>تأكيد الباسورد</h5>
                        <input class="input" name="passwordw" type="password">
                    </div>
                </div>
                <div class="terms">
                    <input type="checkbox">
                    <label>لقد قرأت ووافقت علي </label><a id="action-modal">تعليمات الاستخدام.</a>
                </div>
                <div class="btn-container">
                    <input href="" type="submit" name="add"  style="text-align:center;" value="تسجيل" class="btn-action">
                </div>
                <div class="account">
                    <p> لديك اميل بالفعل</p>
                    <a href="log.php">دخول</a>
                </div>
                <!-- The Modal -->
                <div id="modal-terms" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2>تعليمات الاستخدام</h2>
                        <p>"1. الأطراف ودخول المستخدم
1.1 - أطراف هذه الاتفاقية هي أي مستخدم لهذا الموقع ومالك هذا الموقع الإلكتروني وهي ميديكلينك ميدل ايست مانيجمنت سيرفيسز منطقة حرة – ذ.م.م (""ميديكلينيك""). المتحكم بالبيانات الخاصة بهذا الموقع هي ميديكلينك ميدل ايست مانيجمنت سيرفيسز منطقة حرة – ذ.م.م، موقعها الجغرافي في مبنى Publishing Pavilion، الطوابق 5-6-7، مدينة دبي للإنتاج، دبي، الإمارات العربية المتحدة، صندوق بريد 123812.
أي إشارات إلى ""نحن"" ، ""نحن"" أو ""لنا"" في هذه الشروط والأحكام يجب أن تكون على ميديكلينيك؛ يجب الإشارة إلى ""مستخدم"" أو ""أنت"" أو ""خاصتك"" في هذه الشروط والأحكام إلى أي مستخدم لهذا الموقع؛ ستشمل الإشارات ""الموقع الإلكتروني هذا""، عند الاقتضاء، إلى المواقع الإلكترونية الخاصة بأي موقع تابع لشركة ميديكلينيك أو موقع إلكتروني مرتبط بها والذي يتم توفير رابط إليه على هذا الموقع الموقع الإلكتروني (""موقع المجموعة"").
1.2 - يخضع استخدامك لهذا الموقع والوصول إليه في جميع الأوقات لأحكام هذه الشروط والأحكام وباستخدام و / أو الوصول إلى هذا الموقع فإنك توافق تمامًا على جميع هذه الشروط والأحكام وتوافق على الالتزام والامتثال الكامل لها. أنت مسؤول أيضًا عن ضمان أن جميع الأشخاص الذين يصلون إلى موقعنا عبر الإنترنت الخاص بك على دراية بهذه الشروط والأحكام والشروط والأحكام الأخرى السارية، وأنهم يمتثلون لها.
1.3 - إذا كنت لا ترغب في الالتزام بهذه الشروط والأحكام والامتثال لها، فيجب عليك إنهاء وصولك واستخدامك لهذا الموقع على الفور."

"2. سياسة الخصوصية
تلتزم ميديكلينيك بضمان خصوصية وسلامة المعلومات المقدمة من قبل مستخدمي موقعنا، يرجى الاطلاع على سياسية الخصوصية الخاص بنا على صفحة سياسة الخصوصية. "

"3. حقوق الملكية الفكرية
3.1 - وصول المستخدم إلى هذا الموقع والمعلومات الواردة فيه، لا ينقل أو يشكل بأي شكل من الأشكال أية صلاحية أو حقوق ملكية فكرية لبيانات أو معلومات ميديكلينيك المعروضة أو القابلة للوصول من الموقع أو أي من العلامات التجارية، وحقوق الطبع والنشر أو التصاميم أو براءات الاختراع أو أسماء المنشآت أو المعلومات الطبية أو المعلومات السرية أو الأسرار التجارية أو أي حقوق ملكية فكرية أخرى قد تندرج تحت عنوان ميديكلينيك أو المؤلف أو المترجم أو المنشئ أو المرخص له.
3.2 - تظل جميع العلامات التجارية والشعارات وأسماء المنشآت وغيرها من العلامات والملكية الفكرية الخاصة بـميديكلينيك المتعلقة بهذا الموقع الإلكتروني، أو أي معلومات واردة أو يمكن الوصول إليها من هذا الموقع، هي ملكية خاصة وحصرية لـميديكلينيك والمؤلفين أو المرخصين ذوي الصلة ويتعهد المستخدم بعدم استخدام هذه الملكية الفكرية أو نشرها أو التعامل معها بطريقة أخرى دون موافقة ميديكلينيك أو الجهة المرخصة أو المؤلف عن طريق موافقة خطيّة مسبقة.
3.3 - حقوق الطبع والنشر وجميع حقوق الملكية الفكرية الأخرى الموجودة في أي قاعدة / قواعد بيانات تحتفظ بها ميديكلينيك والمتعلقة بهذا الموقع الإلكتروني مملوكة لشركة ميديكلينيك أو المزود أو المورد المعني.
3.4 - يجوز للمستخدم فقط استخدام المعلومات التي تم استردادها أو عرضها أو تنزيلها أو الحصول عليها عن طريق عرض هذا الموقع، لاستخدامه الشخصي وغير التجاري ولايجوز بيع هذه المعلومات و / أو البيانات أو إعادة بيعها أو إرسالها أو إتاحتها بطريقة أخرى أو نشرها بأي طريقة عبر أي وسائط إلى أي أطراف ثالثة ما لم يتم الحصول على موافقة خطية مسبقة من ميديكلينيك.
3.5 - يتعهد المستخدم بعدم تغيير أو حذف أية إشعارات للملكية الواردة في أي مواد أو بيانات أو معلومات تم تنزيلها أو تم استردادها من موقع ميديكلينيك.
3.6 - لا يجوز للمستخدم، تحت أي ظرف من الظروف، عكس أو تغيير أو تفكيك أو ترجمة أو إعادة إنتاج أو نسخ أو تخزين أي محتوى في نظام استرجاع أو ترجمة المحتوى إلى أي لغة أو لغة كمبيوتر أو إعادة إرساله بأي شكل أو بأية وسيلة (الاستنساخ الإلكتروني أو الميكانيكي أو الصور الفوتوغرافية) أو التسجيل أو غير ذلك) لأي من المواد أو المعلومات أو المحتوى الذي تم عرضه أو تنزيله أو استرجاعه من هذا الموقع دون موافقة خطية مسبقة من ميديكلينيك."

"4. المحتوى على الموقع
4.1 - يُقصد بالمحتوى الموجود على الموقع الإلكتروني هذا، وأي موقع إلكتروني للمجموعة، توفير المعلومات المتعلقة بـميديكلينيك والخدمات التي تقدمها منشآت ميديكلينيك، والتي قد تتضمن معلومات طبية عامة.
4.2 - المحتوى المتعلق بخدمات الرعاية الصحية التي تقدمها مجموعة ميديكلينيك لا يشكل بأي حال اقتراحًا أو عرضًا لتقديم هذه الخدمات للمستخدم. ليس هناك ما هو وارد في هذا الموقع أو المواقع الإلكترونية للمجموعة لتكون معلومات تعليمية للتشخيص أو العلاج الطبي. لا تهدف المعلومات الموجودة على هذا الموقع ومواقع المجموعة إلى استبدال أو التقليل من أهمية المشورة الطبية المهنية بل يتم إدراجها فقط لأغراض إعلامية وتعليمية عامة. لا تتعلق المعلومات بأي فرد معين أو أفراد معينين، ولا يجب أن يعتمد أي مستخدم على هذه المعلومات تحت أي ظرف من الظروف لأغراض العلاج و / أو كاستشارة طبية.
4.2 - يجب على أي شخص يحتاج إلى أي نصيحة أو علاج طبي استشارة الطبيب المعالج أو غيره من متخصصي الرعاية الصحية المؤهلين لتشخيص أي مشاكل صحية أو أمراض بشكل مناسب ووصف العلاج المناسب.
4.3 - يتم توفير جميع المعلومات التي يتم عرضها أو الخدمات المستخدمة أو التي يتم الوصول إليها من هذا الموقع أو مواقع المجموعة الخاصة بنا ""كما هي"" دون أي ضمان، سواء كانت صريحة أو ضمنية.
4.4 - لا تضمن ميديكلينيك أو تحمل أو تمثل أن أي خدمات أو مزايا أو تسهيلات يتم تقديمها على هذا الموقع الإلكتروني أو مواقع مجموعتنا للمستخدمين أو فئة من المستخدمين، مثل الحجز عبر الإنترنت المتاح لبعض المتخصصين في الرعاية الصحية المسجلين، سيكون متاحًا دائمًا، أو دقيقة وموثوقة، أو أداء الوظيفة المقصود بها. يتم تحذير المستخدمين من الاعتماد على أي من هذه الخدمات أو التسهيلات المقدمة ويجب عليهم دائمًا التحقق بشكل مستقل من أية معلومات أو التأكيد من الحجز أو أية معلومات يتم إنشاؤها من هذا الموقع أو مواقع المجموعة أو أي برامج مرتبطة بها."

"5. الروابط والإعلان
5.1 - توفر ميديكلينيك روابط تشعبية لمواقع إلكترونية يتم تشغيلها بواسطة أطراف ثالثة. يتم تشجيع المستخدمين على استخدام السلطة التقديرية عند البحث أو الوصول إلى هذه الروابط.
5.2 - لا تتحمل ميديكلينيك، تحت أي ظرف من الظروف، المسؤولية عن المحتوى و / أو الخدمات أو المنتجات المقدمة على المواقع الإلكترونية الخاصة بالجهات الخارجية والتي قد تكون مرتبطة بهذا الموقع ولا تقدم أي ضمان أو علاقة ولا تقدم أي تمثيل فيما يتعلق بهذه المواقع المرتبطة.
5.3 - لا تسري بنود هذه الشروط والأحكام على مواقع الطرف الثالث حيث لا يتم صيانة و / أو استضافة المواقع الإلكترونية من قبل ميديكلينيك أو مقدمي خدماتها.
5.4 - قد يحتوي الموقع الإلكترونية هذا أو مواقع المجموعة على إعلانات تتضمن، في جملة أمور، أي مواد إيضاحية و / أو نصية، بما في ذلك اللافتات والنوافذ المنبثقة والأزرار والإعلانات التجارية والروابط ورعاية الإعلانات. ما لم تتم الإشارة إلى ذلك خطياً على وجه التحديد، لا تؤيد ميديكلينيك أي منتج يتم الإعلان عن خدماته أو الترويج له بواسطة هذا الإعلان، كما لا تقدم ميديكلينيك أي تمثيل أو تقدم أي ضمان فيما يتعلق بالمحتوى أو الدقة أو الملاءمة أو الفائدة لغرض أي مادة، أو المعلومات أو البيانات الواردة أو المرتبطة بأي إعلان من هذا القبيل.
5.5 - يمكنك الارتباط بموقعنا، شريطة:
• القيام بذلك بطريقة عادلة وقانونية ولا تضر بسمعة ميديكلينيك أو تستفيد منها؛
• يجب ألا تنشئ رابطًا بطريقة توحي بأي شكل من أشكال الارتباط أو الموافقة أو التصديق من جانبنا في حالة عدم وجود أي رابط. من خلال القيام بذلك، لا تقبل ميديكلينيك أي شكل من أشكال الارتباط أو الموافقة أو التصديق من جانبنا في حالة عدم وجود أي منها؛
• يجب ألا تنشئ رابطًا لموقعنا على الإنترنت في أي موقع إلكتروني لا تملكه؛ و
• يجب أن يلتزم الموقع الإلكتروني الذي تتصل به من جميع النواحي بمعايير محتوى لسياسات تشغيل ميديكلينيك (بصيغتها المعدلة من وقت لآخر).
5.6 - تحتفظ ميديكلينيك بالحق في أن تطلب منك إزالة أي روابط في موقعنا في أي وقت إذا كنا نعتقد أنها تضر بسمعتنا أو نستفيد منه، وسحب إذن الارتباط دون إشعار مسبق.
5.7 - إذا كنت ترغب في استخدام أي محتوى على موقعنا الإلكتروني بخلاف ما هو موضح أعلاه ، فيرجى التواصل مع ميديكلينيك في أي وقت عبر البريد الإلكتروني على info@mediclinic.ae."

"6. قيود المستخدم والأمان
6.1 - يتعهد المستخدم بالامتثال لآداب الإنترنت المقبولة بشكل عام والالتزام بأية سياسات تشغيل خاصة بميديكلينيك التي يمكن تعديلها من وقت لآخر وفقًا لتقدير ميديكلينيك. يتعهد المستخدم ويوافق بأن تكون جميع المعلومات والوثائق والبيانات والمواد المقدمة أو المنقولة إلى ميديكلينيك دقيقة وصادقة وحديثة وأن المستخدم هو المسؤول الوحيد عن محتوى هذه المعلومات والوثائق والبيانات والمواد.
6.2 - تحتفظ ميديكلينيك بالحق في اتخاذ أي إجراء فيما يتعلق بأية وثائق أو معلومات أو بيانات أو مواد قد تراها ميديكلينيك وفقًا لتقديرها الخاص مناسبة بالضرورة، إذا كانت تعتقد أن عدم اتخاذ هذا الإجراء قد يخلق أية مسؤولية سواء كانت مدركة أو غير ذلك بالنسبة لميديكلينيك أو مورديها، أو المعلنين الذين يتسببون في تفقد ميديكلينيك أو تكبدها أي ضرر أو أضرار في أي مصلحة مملوكة أو حسن نية أو التي قد تؤثر سلبًا على توفير أو الوصول إلى هذا الموقع أو خدمات أي من مزودي الخدمة. وعلى وجه الخصوص، يتعهد المستخدم:
6.2.1 - عدم انتهاك خصوصية أي شخص أو انتهاك أمان أي نظام كمبيوتر أو شبكة، والتي تشمل على سبيل المثال لا الحصر:
• انتهاك حقوق النشر أو براءات الاختراع أو العلامات التجارية أو الأسرار التجارية أو غيرها من حقوق الملكية أو حقوق الملكية الفكرية الأخرى بشكل مباشر أو غير مباشر؛
• انتهاك أي قانون أو مادة قانونية أو مرسوم أو لائحة أو سياسة عامة سارية في إنجلترا وويلز. في هذا الصدد، يتعهد المستخدم بالتعرف على جميع المعلومات وضمان استمرار معرفته بأية تعديلات على هذه القوانين أو اللوائح والتي قد تكون سارية من وقت لآخر؛
• يجب ألا تكون أي معلومات أو مستندات أو بيانات أو مواد مقترحة أو مقدمة إلى ميديكلينيك تشهيرية أو إخبارية أو تهديد غير قانوني أو مضايقة أو فاحشة أو مسيئة أو سيئة؛
• يجب ألا تحتوي أي ملفات مرسلة على ""فيروسات"" أو ""أحصنة طروادة"" أو ""فيروسات ديدان"" أو ""قنابل زمنية"" أو ""عمليات إلغاء"" أو أي برامج أو عناصر برمجية أخرى للبرمجة الحاسوبية تهدف إلى إتلاف أو تداخل أو اعتراض أو مصادرة أي نظام أو بيانات أو شبكة كمبيوتر أو المشاركة في أي أنشطة يمكن اعتبارها اختراقًا أو تتداخلاً بطريقة أخرى مع نزاهة هذا الموقع وبنيته التحتية الداعمة؛
• ارتكاب أي فعل أو أي إغفال قد يكون له آثار تقنية سلبية على سلامة أو وظائف هذا الموقع وخوادمه الأساسية والبنية التحتية الداعمة له؛ و / أو
• إعطاء اسم المستخدم وكلمة المرور أو إتاحته بأي طريقة لأي شخص آخر بأي طريقة لاستخدام هذا الشخص، ويتعهد المستخدم باتخاذ أي خطوات قد تكون ضرورية لضمان حفظ وسرية اسم المستخدم وكلمة المرور وفي أي حدث يجب على المستخدم عدم الكشف عنه لأي طرف ثالث دون موافقة خطية مسبقة من ميديكلينيك. يجب أن يكون المستخدم ملزماً قانونياً ويتحمل المسؤولية عن الإجراءات المتخذة باسم المستخدم وكلمة المرور. يقر المستخدم بموجب هذا بأنه يحق لـميديكلينيك أن تفترض بشكل معقول أن المستخدم هو الطرف المتداول حيث تم استخدام اسم مستخدم معين وكلمة مرور للوصول إلى أي نشاط على هذا الموقع أو عرضه و / أو المشاركة فيه، أو أي جزء منه؛
6.2.2 - يجب إخطار ميديكلينيك على الفور إذا كان لديه أي سبب للاعتقاد بأن سرية اسم المستخدم وكلمة المرور قد تتعرض للخطر؛ و
6.2.3 – يجب إخطار ميديكلينيك بأي قيود و / أو شروط مفروضة على سلطة أي مستخدم مصرح له والذي تم منحه حق الوصول إلى الخدمة و / أو محتوى هذا الموقع على الفور وكتابياً.

". 7 إخلاء المسؤولية والتعويض
7.1 - نظرًا لعدد المصادر التي تحصل منها ميديكلينيك على المحتوى وطبيعة التوزيع الإلكتروني عبر شبكة الإنترنت والإنترنت في جميع أنحاء العالم، فلن تكون ميديكلينيك ولا أي من مورديها مسؤولين تجاه أي مستخدم أو أي شخص آخر فيما يتعلق بأي خسارة أو أضرار من أي نوع كانت ناتجة عن أو ناشئة عن أي من الحالات التالية:
• ناتجة عن أو تتعلق باستخدام أو الوصول إلى أو عدم القدرة على استخدام أو الوصول إلى أي من المعلومات أو المحتوى أو الخدمات المقدمة على هذا الموقع؛
• أي حقيقة أو ظرف خارج عن السيطرة المعقولة لميديكلينيك ؛
• أي عطل في الخدمة المقدمة من موردين خارجيين وعدم توفرهم أو أداء معيب لأي برنامج أو أي من الخدمات المتاحة على هذا الموقع أو منه؛
• أداء أو عدم توفر هذا الموقع، أو أي موقع إلكتروني آخر مرتبط به أو متعلق به؛
• أي تعليق أو انقطاع للوصول إلى هذا الموقع من قبل ميديكلينيك؛
• أي انتهاك للخصوصية أو الأمن من قبل أي شخص أو كيان؛
• فقد أو تلف أو تدمير أو سرقة أو تلوث أو غتلاف أي بيانات أو معلومات أو محتوى يمكن الوصول إليه عن طريق هذا الموقع الإلكتروني؛
• الحفاظ على وسلامة أي نص أو أي شكل آخر من أشكال البيانات أو المعلومات أو المحتوى على هذا الموقع أو ما يمكن الوصول إليه؛
• أي نشر أو استخدام لأي معلومات أو بيانات واردة أو يمكن الوصول إليها من هذا الموقع ؛ و / أو
• فشل المستخدم في أداء أي من التزاماته بموجب هذه الشروط والأحكام، بما في ذلك على سبيل المثال لا الحصر عدم الامتثال لأي من أحكام الفقرتين 6 و 8.
7.2 - دون الحد من عمومية ما تقدم، لن تكون ميديكلينيك أو مورديها مسؤولين عن أي خسارة مباشرة أو تبعية أو غير مباشرة تكبدها مستخدم أو أي شخص آخر.
7.3 - على الرغم من أن ميديكلينيك ستستخدم جميع المساعي المعقولة لضمان سلامة وأمن وسرية جميع المعلومات الشخصية المقدمة و / أو التي تم الحصول عليها من المستخدم، فلن تكون مسؤولة تحت أي ظرف من الظروف في حالة تعرض هذه المعلومات للخطر أو نشرها أو الكشف عنها بطريقة أخرى من خلال السلوك خارج عن سيطرة ميديكلينيك مثل القرصنة أو الهجمات من قبل ""الفيروسات"" أو ""حصان طروادة"" أو أي إجراءات أو برامج أخرى للبرمجة الحاسوبية التي تهدف إلى إتلاف أو التدخل بشكل ضار أو اعتراض أو مصادرة أي نظام أو بيانات أو معلومات شخصية.
7.4 - تأكد ميديكلينيك بموجب هذا عدم تحملها لأي مسؤولية عن أي وجميع الخسائر أو المسؤوليات أو التكاليف أو الأضرار التي لحقت أو تكبدها مستخدم أو أي شخص آخر ناشئ عن أو فيما يتعلق باستخدام أو توفير أو توزيع أي ميزة أو خدمة يمكن الترويج لها أو يتم عرضها على هذا الموقع أو أي موقع آخر يمكن الوصول إليه عن طريق هذا الموقع أو يرتبط به، ومع ذلك قد تحدث هذه الخسارة أو المسؤولية، والتي قد تكون الخسارة أو المسؤولية مالية أو شخصية أو تبعية أو عرضية أو غير ذلك.
7.5 - لا تضمن ميديكلينيك أو تقر بأن الوظائف أو التسهيلات أو الخدمات أو المحتوى الوارد في هذا الموقع، أو ما يمكن الوصول إليه من هذا الموقع أو أي جزء منه، سوف ينقطع أو يخلو من الأخطاء أو أنه سيتم تصحيح العيوب أو أن هذا الموقع و / أو أن الخادم الذي يجعله متاحًا للمستخدم، خالي من الفيروسات أو العدوى أو الأخطاء أو ما شابه ذلك، ولا تقدم ميديكلينيك أي ضمان أو تمثيل، صريح أو ضمني، من حيث الموثوقية والدقة والفائدة والكفاية والجودة أو العملة أو الاكتمال أو الملاءمة أو الفائدة لأي غرض أو غير ذلك لأي من المعلومات أو الخدمات أو التسهيلات أو البيانات أو المواد المعروضة على هذا الموقع أو الوصول إليها.
7.6 - يأكد المستخدم بموجب هذا ولا يحمل ميديكلينيك ومورديه أي مسؤولية ضد أي وجميع المطالبات فيما يتعلق بأي خسارة أو ضرر المشار إليها في البنود 7.1 إلى 7.4 من هذه الشروط والأحكام.
7.7 - على الرغم مما تقدم، لا يوجد نص في هذه الشروط والأحكام يستثني أو يحد، أو يقصد به الاستبعاد أو الحد، بأي شكل من الأشكال من مسؤوليتنا تجاه المستخدم حيث يكون من غير القانوني القيام بذلك.
</p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
<?php 
if(isset($_POST['add'])){
    $up = 'userimg/';
    $upp = $up.basename($_FILES['img']['name']);
    if(move_uploaded_file($_FILES['img']['tmp_name'] , $upp)){
        $name = $_POST['name'];
        $email =$_POST['email'];
        $img = $_FILES['img']['name'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $password2 = $_POST['passwordw'];
        if($password != $password2){ echo"<h1>الرجاء ادخال الرقم بشكل صحيح</h1>";
            exit();}
            
                
         $re ="SELECT * FROM `user` WHERE `email` = '$email' ";
         
         $res=mysqli_query($con , $re);
         
          $ret=mysqli_fetch_assoc($res);
         
         if ($ret > 0) 
         {
             echo '<h1> هذا البريد متسخدم من قبل   !</h1>';
         }
         
         $ree ="SELECT * FROM `user` WHERE `name` = '$name' ";
         $rees=mysqli_query($con , $ree);
         $reet=mysqli_fetch_assoc($rees);
         if($reet > 0){
             echo '<h1>هذا الاسم مستخدم من قبل</h1> ';
            die();
         }
  

        

            $sql="INSERT into `user`(`name`,`email`,`phone`,`img`,`password`) values('$name','$email','$phone','$img','$password');   ";
           
            $sq=mysqli_query($con , $sql);
           
            $_SESSION['user']=$_POST['name'];
            $_SESSION['email']=$_POST['email'];
            $_SESSION['phone']=$_POST['phone'];
            $_SESSION['img']=$_FILES['img'];
            $_SESSION['password']=$_POST['password'];  
        
          
            if($sq == true){
                print "<h1 style='font-size:30px; text-aline:center; color:#fff;'>تمت العمليه بنجاح</h1>";
                 echo ' <meta http-equiv="refresh" content="1.5">';
               
            } 
            
        }
    }
