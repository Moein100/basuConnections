Livewire.on('commentWasAdded',() =>
{
    Swal.fire(
        {
            title: 'test',
            text : 'comment was added successfully',
            icon: 'success',
            confirmButtonText: 'Save',
            timer: 4000
        });
})

Livewire.on('ideaWasMarkedAsSpam',() =>
{
    Swal.fire(
        {
            title: 'test',
            text : 'idea spamed',
            icon: 'success',
            confirmButtonText: 'Save',
            timer: 4000
        });
})

Livewire.on('IdeaWasUpdated',() =>
{
    Swal.fire(
        {
            title: 'test',
            text : 'idea was updated',
            icon: 'success',
            confirmButtonText: 'Save',
            timer: 4000
        });
})

Livewire.on('ideaWasMarkedAsNotSpam',() =>
{
    Swal.fire(
        {
            title: 'test',
            text : 'idea was marked as not spam',
            icon: 'success',
            confirmButtonText: 'Save',
            timer: 4000
        });
})

Livewire.on('ideaWasCreated',() =>
{
    Swal.fire(
        {
            title: 'test',
            text : 'ideaWasCreated',
            icon: 'success',
            confirmButtonText: 'Save',
            timer: 4000
        });
})
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
