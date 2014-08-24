# Gets JSON using Bandcamp, used in seed file to populate the database

class PopulateData
  require 'json'
  require 'open-uri'
  require 'date'
  require 'time'

  def self.albums
    albumJSON = File.read("http://api.bandcamp.com/api/band/3/discography?key=#{BANDCAMP_API_KEY}&band_id=4180852708")
    albumContent = JSON.parse(albumJSON)

    puts albumContent
  end


end
