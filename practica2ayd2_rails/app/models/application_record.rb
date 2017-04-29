class ApplicationRecord < ActiveRecord::Base
    def id
      sync_with_transaction_state
      read_attribute(self.class.primary_key)
    end

    self.abstract_class = true
end
