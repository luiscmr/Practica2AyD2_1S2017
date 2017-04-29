class Detalle < ApplicationRecord
    self.table_name = 'ayd2_detalle_201020917'
    self.primary_key = 'ayd2_detalle_id'
    belongs_to :categorium, primary_key: 'ayd2_categoria_id', required: false
end
