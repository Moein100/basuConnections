


function GoToIdea(event) {
    
    const tagName=event.target.tagName.toLowerCase();

    console.log(tagName);

    const ignores=['button','svg','path','a'];



    if (! ignores.includes(tagName)) 
    {
        event.target.closest('.idea-container').querySelector('.idea-link').click();
    }
}

function testHover()
{
    console.log('it works');
}