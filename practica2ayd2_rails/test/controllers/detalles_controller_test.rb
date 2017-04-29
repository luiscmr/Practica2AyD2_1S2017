require 'test_helper'

class DetallesControllerTest < ActionDispatch::IntegrationTest
  setup do
    @detalle = detalles(:one)
  end

  test "should get index" do
    get detalles_url
    assert_response :success
  end

  test "should get new" do
    get new_detalle_url
    assert_response :success
  end

  test "should create detalle" do
    assert_difference('Detalle.count') do
      post detalles_url, params: { detalle: { ayd2_detalle_boolean: @detalle.ayd2_detalle_boolean, ayd2_detalle_date: @detalle.ayd2_detalle_date, ayd2_detalle_datetime: @detalle.ayd2_detalle_datetime, ayd2_detalle_decimal: @detalle.ayd2_detalle_decimal, ayd2_detalle_descripcion: @detalle.ayd2_detalle_descripcion, ayd2_detalle_timestamp: @detalle.ayd2_detalle_timestamp, categoria_id: @detalle.categoria_id } }
    end

    assert_redirected_to detalle_url(Detalle.last)
  end

  test "should show detalle" do
    get detalle_url(@detalle)
    assert_response :success
  end

  test "should get edit" do
    get edit_detalle_url(@detalle)
    assert_response :success
  end

  test "should update detalle" do
    patch detalle_url(@detalle), params: { detalle: { ayd2_detalle_boolean: @detalle.ayd2_detalle_boolean, ayd2_detalle_date: @detalle.ayd2_detalle_date, ayd2_detalle_datetime: @detalle.ayd2_detalle_datetime, ayd2_detalle_decimal: @detalle.ayd2_detalle_decimal, ayd2_detalle_descripcion: @detalle.ayd2_detalle_descripcion, ayd2_detalle_timestamp: @detalle.ayd2_detalle_timestamp, categoria_id: @detalle.categoria_id } }
    assert_redirected_to detalle_url(@detalle)
  end

  test "should destroy detalle" do
    assert_difference('Detalle.count', -1) do
      delete detalle_url(@detalle)
    end

    assert_redirected_to detalles_url
  end
end
