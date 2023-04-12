<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- in this file I'm gonna practice lists in html 
    we have three kinds of lists: unordered, ordered and description list-->

    <ul style="list-style-type: disc;">
        <li>unordered list1</li>
        <li>unordered list2</li>
            <ul>
                <li>nested unorder list1</li>
                <li>nested unorder list2</li>
            </ul>
        <li>unordered list3</li>
    </ul>

<hr>

    <ol type="1" start="5">
        <li>ordered list1</li>
        <li>ordered list2</li>
            <ol>
                <li>nested ordered list1</li>
                <li>nested ordered list1</li>
            </ol>
        <li>ordered list3</li>
    </ol>

<hr>

    <dl>
        <dt>description list1 term</dt>
        <dd>description list1 detail</dd>
        <dt>description list2 term</dt>
        <dd>description list2 detail</dd>
        <dt>description list3 term</dt>
        <dd>description list3 detail</dd>
    </dl>

<hr>
</body>
</html>