


function GoToIdea(event) {
    
    const tagName=event.target.tagName.toLowerCase();

    console.log(tagName);

    const ignores=['button','svg','path','span'];



    if (! ignores.includes(tagName)) 
    {
        event.target.closest('.idea-container').querySelector('.idea-link').click();
        // console.log(event.target.closest('.idea-container').querySelector('.idea-link'));
    }
}

function testHover()
{
    console.log('it works');
}