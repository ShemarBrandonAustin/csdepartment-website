<?php
if(isset($_POST["acti-form"]))
{
    $addactivity = $_POST['addactivity'];
    $adddescript = $_POST['adddescript'];
    $result = query("INSERT INTO activities 'name','description','category_id' VALUES '$addactivity','$adddescript','4'");

    if($result)
    {
        ?><script>window.alert("Activity Successfully Added");</script><?php
    }
        else
        {
            ?><script>window.alert("Activity Failed To Be Added");</script><?php
        }
}

if(isset($_POST["alumni-form"]))
{
    $addFirstname = $_POST['Firstname'];
    $addLastname = $_POST['Lastname'];
    $addDOB = $_POST['DOB'];
    $addPhoto = $_POST['Alumni-Photo'];
    $addRPD = $_POST['RPD'];
    $age = //do calculations;
    $result = query("INSERT INTO alumni 'firstname','lastname','DOB','age','photo_path','document_path','category_id' VALUES '$addFirstname','$addLastname','$addDOB','$age','$addPhoto','$addRPD','1'");

    if($result)
    {
        ?><script>window.alert("Alumni Successfully Added");</script><?php
    }
        else
        {
            ?><script>window.alert("Alumni Failed To Be Added");</script><?php
        }
}

if(isset($_POST["undergrad-form"]))
{
    $addReseacher = $_POST['Researcher'];
    $addRAbstract = $_POST['R_Abstract'];
    $addRDOC = $_POST['R_DOC'];
    $result = query("INSERT INTO undergraduate_reseach 'researchers','abstract','document_path','category_id' VALUES '$addReseacher','$addRAbstract','$addRDOC','7'");

    if($result)
    {
        ?><script>window.alert("Undergraduate Research Item Successfully Added");</script><?php
    }
        else
        {
            ?><script>window.alert("Undergraduate Research Item Failed To Be Added");</script><?php
        }
}

if(isset($_POST["staff-form"]))
{
    $addFirstname = $_POST['Firstname'];
    $addLastname = $_POST['Lastname'];
    $addDOB = $_POST['DOB'];
    $addPhoto = $_POST['Staff-Photo'];
    $addSPD = $_POST['SPD'];
    $age = //do calculations;
    $result = query("INSERT INTO staff 'firstname','lastname','DOB','age','photo_path','document_path','category_id' VALUES '$addFirstname','$addLastname','$addDOB','$age','$addPhoto','$addSPD','6'");

    if($result)
    {
        ?><script>window.alert("Staff Successfully Added");</script><?php
    }
        else
        {
            ?><script>window.alert("Staff Failed To Be Added");</script><?php
        }
}

if(isset($_POST["programme-form"]))
{
    $addProgram = $_POST['Programme'];
    $addDuration = $_POST['programme-duration'];
    $result = query("INSERT INTO programmes 'name','duration','category_id' VALUES '$addProgram','$addDuration','5'");

    if($result)
    {
        ?><script>window.alert("Programme Successfully Added");</script><?php
    }
        else
        {
            ?><script>window.alert("Programme Failed To Be Added");</script><?php
        }
}

if(isset($_POST["course-form"]))
{
    $addCoursename = $_POST['course-name'];
    $addCoursenum = $_POST['course-code'];
    $adddescript = $_POST['course-description'];
    $addCourseyear = $_POST['course-year'];
    $addCourseProgram = $_POST['programme'];
    $result = query("INSERT INTO courses 'name','course_code','description','course_year','programme_id', 'category_id' VALUES '$addCoursename','$addCoursenum,'$adddescript','$addCourseyear','$addCourseProgram','3'");

    if($result)
    {
        ?><script>window.alert("Course Successfully Added");</script><?php
    }
        else
        {
            ?><script>window.alert("Course Failed To Be Added");</script><?php
        }
}

if(isset($_POST["club-form"]))
{
    $addClubname = $_POST['club-name'];
    $addClubdesc = $_POST['club-description'];
    $result = query("INSERT INTO clubs 'name','description','category_id' VALUES '$addClubname','$addClubdesc','2'");

    if($result)
    {
        ?><script>window.alert("Club Successfully Added");</script><?php
    }
        else
        {
            ?><script>window.alert("Club Failed To Be Added");</script><?php
        }
}
?>
