1. setup new symf project and remote repo 

Check

2. make the crud

-create and check database connection : go to .env file, comment postgres and uncomment/update mysql line

-create entities

make:entity student

[Semantical Error] The annotation "@Embedded" in property App\Ent
  ity\Student::$address was never imported. Did you maybe forget to
   add a "use" statement for this annotation?

Had this error again and was stuck. Fix it by importing use use Doctrine\ORM\Mapping\Embedded dependency
otherwise we cant use embeddables (wasnt clear from docs to me atleast).


Do we need constructors? we dont have nullable fields... anyway lets do it like this.

Tip : dont add the relation property from the getgo, leave it open or Symfony will cry
when you try to update the field cause it already exists, and apparently its not that easy
to update the field of an entity from another entity.

Make address getters and setters! Select properties and use the extension php8 getters and setters

- make the crud with make:crud

made the crud for both Student and Teacher entities.
Good stuff, but we're having issues with the address, its not just one field, its a class 4 properties
we cant display right now so we'll probably have to edit the form or some methods.
Making the crud generated : Controllers with routing, Forms directory to build forms and view templates 
rendered by the controllers depending on the route.

The formbuilder can't just add an address input field because we stated that we want address to be a class
with 4 properties, with every property being an input field. We have to make a custom AddressType form
so we can build these necessary input fields.

STOP FORGETTING MIGRATIONS! wasted half an hour when I didnt make a mistake cause I forgot to migrate again.

Why do I keep struggling with the student page? Teacher page is fine.

DONT FORGET TO EDIT VIEW IN TEMPLATES!
dont rely on them working fine from the get go, might need to be altered.

3. make the authentication