<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <x-modal-confirm
        livewireEventToOpenModal="markAsSpamCommentWasSet"
        eventToCloseModal="commentWasMarkedAsSpam"
        modalTitle="Mark Comment As Spam"
        modaldescription="Spam comment?"
        modalConfirmButtonText="Spam"
        wireClick="MarkCommentAsSpam"
    />
</div>
