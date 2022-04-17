<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <x-modal-confirm
        livewireEventToOpenModal="markAsNotSpamCommentWasSet"
        eventToCloseModal="commentWasMarkedAsNotSpam"
        modalTitle="Mark Comment As Spam"
        modaldescription="Spam comment?"
        modalConfirmButtonText="Spam"
        wireClick="MarkCommentAsNotSpam"
    />
</div>
