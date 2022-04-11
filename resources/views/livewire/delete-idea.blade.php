
    {{-- The best athlete wants his opponent at his best. --}}
    <!-- This example requires Tailwind CSS v2.0+ -->
      <x-modal-confirm
      eventToOpenModal="custom-show-delete-modal"
      eventToCloseModal="ideaWasDeleted"
      modalTitle="Delete Idea"
      modaldescription="Are you sure you want to delete the idea? this action cannot be undone"
      modalConfirmButtonText="Delete"
      wireClick="deleteIdea"
      />


