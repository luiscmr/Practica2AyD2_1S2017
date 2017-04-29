# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema.define(version: 1) do

  create_table "ayd2_categoria_201020917", primary_key: "ayd2_categoria_id", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=latin1" do |t|
    t.string "ayd2_categoria_descripcion", null: false
  end

  create_table "ayd2_detalle_201020917", primary_key: "ayd2_detalle_id", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=latin1" do |t|
    t.decimal  "ayd2_detalle_decimal",     precision: 5, scale: 2
    t.string   "ayd2_detalle_descripcion"
    t.date     "ayd2_detalle_date"
    t.datetime "ayd2_detalle_datetime"
    t.datetime "ayd2_detalle_timestamp"
    t.boolean  "ayd2_detalle_boolean"
    t.integer  "ayd2_categoria_id",                                null: false
    t.index ["ayd2_categoria_id"], name: "FK_CATEGORIA", using: :btree
  end

  add_foreign_key "ayd2_detalle_201020917", "ayd2_categoria_201020917", column: "ayd2_categoria_id", primary_key: "ayd2_categoria_id", name: "ayd2_detalle_201020917_ibfk_1", on_update: :cascade, on_delete: :cascade
end
