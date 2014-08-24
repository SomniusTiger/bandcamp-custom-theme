# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rake db:seed (or created alongside the db with db:setup).
#
# Examples:
#
#   cities = City.create([{ name: 'Chicago' }, { name: 'Copenhagen' }])
#   Mayor.create(name: 'Emanuel', city: cities.first)

# Seed dummy data from json file

PopulateData.albums

# Example 

# json = File.read("#{Rails.root}/public/csvs/sponsor_index_categories.json")
# content = JSON.parse(json)

# content['RECORDS'].each do |record|
#   Category.create(name: record['name'], id: record['id'], parent_id: record['parent_id'])
# end
