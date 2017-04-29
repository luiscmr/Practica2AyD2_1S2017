class Categorium < ApplicationRecord
    self.table_name = 'ayd2_categoria_201020917'
    self.primary_key = :ayd2_categoria_id
    
    has_many :detalles, foreign_key: "ayd2_categoria_id"
    validates :ayd2_categoria_descripcion,  presence: true, uniqueness: { message: "La categoria ya existe!" } 
    accepts_nested_attributes_for :detalles
end
