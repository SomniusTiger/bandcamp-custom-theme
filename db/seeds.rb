# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rake db:seed (or created alongside the db with db:setup).
#
# Examples:
#
#   cities = City.create([{ name: 'Chicago' }, { name: 'Copenhagen' }])
#   Mayor.create(name: 'Emanuel', city: cities.first)

# Seed dummy data from json file
# albumPath = "#{Rails.root}/db/albums.json"
# albums = JSON.parse(File.read(albumPath))

# albums.each do |album|
#   Album.create!(album['album'], without_protection: true)
# end

trackPath = "#{Rails.root}/db/tracks.json"
tracks = JSON.parse(File.read(trackPath))

tracks.each do |track|
  Track.create!(track['track'], without_protection: true)
end
