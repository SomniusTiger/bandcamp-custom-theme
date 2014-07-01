class Persona < ActiveRecord::Base
  p = Persona.new
  p.name = "Some Book"
  puts p.name # "Some Book"
end